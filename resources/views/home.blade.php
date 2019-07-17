@extends('layouts.app')

@section('content')
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="{{url('payments/create?method=mpesastk')}}">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-user fa-3x"></i>
                    </p>
                    <p class="font-w600">M-PESA STK</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="{{url('payments/create?method=mpesac2b')}}">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-magnifier fa-3x"></i>
                    </p>
                    <p class="font-w600">M-PESA C2B</p>
                </div>
            </a>
        </div>
        <!-- END Row #5 -->
    </div>
@endsection
