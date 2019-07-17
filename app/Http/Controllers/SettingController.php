<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = array();

        foreach (Setting::all() as $option) {
            $settings[$option->option] = $option->value;
        }

        return view('settings')
            ->with('settings', $settings)
            ->with('table', 'settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data    = $request->all();

        $setting  = Setting::whereOption($data['option'])->first();
        if($setting){
            if($request->file('value')){
                $image_path = 'images/logo/';
                $data['value']['logo'] = Setting::branding('logo', 'images/logo/logo.png');
                $data['value']['icon'] = Setting::branding('icon', 'images/logo/icon.png');

                if(isset($request->file('value')['logo'])){
                    $logo = $request->file('value')['logo'];
                    $logo_name = time().'.'.$logo->getClientOriginalExtension();
                    $logo->move($image_path, $logo_name);
                    $data['value']['logo'] = 'images/logo/'.$logo_name;

                }

                if(isset($request->file('value')['icon'])){
                    $icon = $request->file('value')['icon'];
                    $icon_name = time().'.'.$icon->getClientOriginalExtension();
                    $icon->move($image_path, $icon_name);
                    $data['value']['icon'] = 'images/logo/'.$icon_name;
                }
            } else {
                $data['value']['logo'] = Setting::branding('logo', 'images/logo/logo.png');
                $data['value']['icon'] = Setting::branding('icon', 'images/logo/icon.png');
            }

            if($setting->update($data)){
                toast(ucwords(__('details saved successfully')), 'success');
            } else {
                toast(ucwords(__('failed to create record')), 'error');
            }
        } else{
            if($request->file('value')){
                $image_path = 'images/logo/';
                $data['value']['logo'] = 'images/logo/logo.png';
                $data['value']['icon'] = 'images/logo/icon.png';

                if(isset($request->file('value')['logo'])){
                    $logo = $request->file('value')['logo'];
                    $logo_name = time().'.'.$logo->getClientOriginalExtension();
                    $logo->move($image_path, $logo_name);
                    $data['value']['logo'] = 'images/logo/'.$logo_name;

                }

                if(isset($request->file('value')['icon'])){
                    $icon = $request->file('value')['icon'];
                    $icon_name = time().'.'.$icon->getClientOriginalExtension();
                    $icon->move($image_path, $icon_name);
                    $data['value']['icon'] = 'images/logo/'.$icon_name;
                }
            } else {
                $data['value']['logo'] = 'images/logo/logo.png';
                $data['value']['icon'] = 'images/logo/icon.png';
            }

            if(Setting::create($data)){
                toast(ucwords(__('details saved successfully')), 'success');
            } else {
                toast(ucwords(__('failed to create record')), 'error');
            }
        }

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data    = $request->all();
        $setting  = Setting::whereOption($data['option'])->first();
        $image_path = 'images/logo/';

        if($setting){
            $data['value']['logo'] = Setting::branding('logo', 'images/logo/logo.png');
            $data['value']['icon'] = Setting::branding('icon', 'images/logo/icon.png');

            if(isset($request->file('value')['logo'])){
                $logo = $request->file('value')['logo'];
                $logo_name = time().'.'.$logo->getClientOriginalExtension();
                $logo->move($image_path, $logo_name);
                $data['value']['logo'] = 'images/logo/'.$logo_name;
            }

            if(isset($request->file('value')['icon'])){
                $icon = $request->file('value')['icon'];
                $icon_name = time().'.'.$icon->getClientOriginalExtension();
                $icon->move($image_path, $icon_name);
                $data['value']['icon'] = 'images/logo/'.$icon_name;
            }

            if($setting->update($data)){
                toast(ucwords(__('details saved successfully')), 'success');
            } else {
                toast(ucwords(__('failed to create record')), 'error');
            }
        } else{
            $data['value']['logo'] = 'images/logo/logo.png';
            $data['value']['icon'] = 'images/logo/icon.png';

            if(isset($request->file('value')['logo'])){
                $logo = $request->file('value')['logo'];
                $logo_name = time().'.'.$logo->getClientOriginalExtension();
                $logo->move($image_path, $logo_name);
                $data['value']['logo'] = 'images/logo/'.$logo_name;
            }

            if(isset($request->file('value')['icon'])){
                $icon = $request->file('value')['icon'];
                $icon_name = time().'.'.$icon->getClientOriginalExtension();
                $icon->move($image_path, $icon_name);
                $data['value']['icon'] = 'images/logo/'.$icon_name;
            }

            if(Setting::create($data)){
                toast(ucwords(__('details saved successfully')), 'success');
            } else {
                toast(ucwords(__('failed to create record')), 'error');
            }
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
