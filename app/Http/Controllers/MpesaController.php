<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Payment;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use AfricasTalking\SDK\AfricasTalking;
use Osen\Mpesa\STK;

class MpesaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        STK::init(
            array(
                'env'               => 'live',
                'type'              => 4,
                'shortcode'         => '881655',
                'headoffice'        => '881655',
                'key'               => 'ucNYYNLGsY0wLlWh4R6AE8dGWjpnfX85',
                'secret'            => 'yRGt7dNciatkzfVz',
                'passkey'           => '0470d3c37e79c46d5c9f19b3eb685808f484691cd1800bbee91f85d890748858',
                'validation_url'    => url('api/mpesa/validate'),
                'confirmation_url'  => url('api/mpesa/confirm'),
                'callback_url'      => url('api/mpesa/reconcile'),
                'timeout_url'       => url('api/mpesa/timeout'),
                'response_url'      => url('api/mpesa/response'),
            )
        );
    }

    /**
     * Send a request to payment gateway for processing
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Redirect;
     */
    public function pay(Request $request)
    {
        $data           = array();

        $payload        = \json_decode($request->getContent(), true);

        $answers        = $payload['form_response']['answers'];

        $data['name']   = $answers[0]['text'];
        $data['phone']  = $answers[1]['phone_number'];

        $package        = $answers[2]['choice']['label'];
        $data['amount'] = Package::whereName($package)->first()->amount;

        try {
            $customer       = Customer::create($data);
            $data['customer_id'] = $customer->id;
        } catch (\Throwable $th) {
            $data['customer_id'] = 1;
        }

        try {
            $response   = STK::send($data['phone'], $data['amount'], $package);

            if(isset($response['errorCode'])){
                return ['code' => $response['errorCode'], 'message' => $response['errorMessage']];
            } else {
                $data['ref']       = isset($response['MerchantRequestID']) ? $response['MerchantRequestID'] : time();
                $data['status']    = 'Pending';
                if(Payment::create($data)){
                    return ['code' => 'success', 'payment' => $data];
                } else {
                    return ['code' => 'fail'];
                }
            }
        } catch (\Exception $e) {
            return ['code' => 'fail', 'error' => $e->getMessage()];
        }
    }

    public function reconcile(Request $request, $method = 'mpesa')
    {
        return STK::reconcile(
            function ($response)
            {
                $resultCode 			    = $response['stkCallback']['ResultCode'];
                $resultDesc 			    = $response['stkCallback']['ResultDesc'];
                $merchantRequestID 			= $response['stkCallback']['MerchantRequestID'];

                if(isset($response['stkCallback']['CallbackMetadata'])){
                    $CallbackMetadata       = $response['stkCallback']['CallbackMetadata']['Item'];

                    $amount                 = $CallbackMetadata[0]['Value'];
                    $mpesaReceiptNumber     = $CallbackMetadata[1]['Value'];
                    $balance                = $CallbackMetadata[2]['Value'];
                    $transactionDate        = $CallbackMetadata[3]['Value'];
                    $phone                  = $CallbackMetadata[4]['Value'];
                
                    $payment                = Payment::where('ref', $merchantRequestID)->first();
                    $payment->status        = 'Paid';
                    $payment->receipt       = $mpesaReceiptNumber;
                    if ($payment->save()) {
                        try {
                            $phone  = (substr($phone, 0,1) == '+') ? $phone : '+'.$phone;

                            $AT     = new AfricasTalking(Setting::sms('api_username', 'schooliq'), Setting::sms('api_key', '97ca15305d52f5113374ea80ae5e4718ebca840099c9d6b7b5dc63b3d0fc1634'));
                            $sms    = $AT->sms();
                            $sms->send([
                                'to'      => $phone,
                                'message' => 'Your payment of '.Setting::currency_codes(Setting::general('currency', 'KES'), 'KES').' '.$amount.'has been received'
                            ]);
                        } catch (\Throwable $th) {
                            toast(ucwords(__('failed to send sms')), 'error');
                        }

                        return true;
                    }

                    return true;
                }

                return true;
            }
        );
    }

    public function validation(Request $request)
    {
        return STK::validate(
            function ($response)
            {
                return true;
            }
        );
    }

    public function confirmation(Request $request)
    {
        return STK::confirm(
            function ($response)
            {
                return true;
            }
        );
    }

    public function results(Request $request)
    {
        return STK::results(
            function ($response)
            {
                return true;
            }
        );
    }

    public function timeout(Request $request)
    {
        return STK::timeout(
            function ($response)
            {
                return true;
            }
        );
    }
}
