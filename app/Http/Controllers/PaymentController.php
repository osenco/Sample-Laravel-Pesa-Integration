<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public $columns = array();
    public $fields = array();
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $model = new Payment;
        $columns =  $model->getFillable();
        $this->fields = $columns;
        $columns = array_diff($columns, []);
        $this->columns = $columns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = DB::table('payments');

        if (empty($request->query())) {
            $payments = Payment::all();
        } else {
            foreach ($request->query() as $key => $val) {
                $db->where($key, $val);
            }

            $payments = $db->get();

            $this->columns = array_diff($this->columns, [$key]);
        }

        return view('table')->with('records', $payments)->with('columns', $this->columns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $payment    = null;
        $method     = $request->input('method', 'mpesastk');

        $account    = $request->input('account', \rand(100000, 999999));
        $amount     = $request->input('amount', 10);

        if ($method == 'mpesac2b') {
            $data   = array(
                'account'   => $account,
                'request'   => $account,
                'status'    => 0,
                'amount'    => $amount,
                'method'    => 'mpesac2b'
            );

            $payment = Payment::create($data);
        }
        return view('create')->with('method', $method)->with('payment', $payment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Payment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('payment')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('edit')->with('payment', $payment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        return $payment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        return $payment->delete($request->all());
    }
}
