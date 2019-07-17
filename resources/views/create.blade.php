@extends('layouts.app')
@section('title', 'New Payment')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-content">
                    @if(app('request')->query('method', 'mpesac2b') == 'mpesac2b')
                    <ol>
                        <li>Enter the Kenya Power business number <b>{{\App\Setting::one('shortcode', '123456', 'mpesa')}}</b></li>
                        <li>Enter account number <b>{{$payment->account}}</b></li>
                        <li>Enter the amount <b>{{$payment->amount}}</b></li>
                        <li>Enter your M-Pesa PIN.</li>
                        <li>Confirm that all details are correct before sending</li>
                        <li>You will receive a confirmation of the transaction via SMS</li>
                        <li>Click the button below to validate the transaction</li>
                    </ul>
                    <br>
                    <a href="{{url('payments/validate/'.$payment->id)}}" class="btn btn-alt-primary btn-lg">Validate Payment</a>
                    @elseif(app('request')->query('method', 'mpesastk') == 'mpesastk')
                        <form action="{{url('mpesa/pay')}}" method="post">
                            <div class="d-none">
                                @csrf
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-info floating input-group">
                                        <input type="text" class="form-control" id="phone" name="phone" value="254705459494">
                                        <label for="material-addon-icon2">Phone number</label>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-phone"></i>
                                        </span>
                                    </div>

                                    <div class="form-material form-material-info floating input-group">
                                        <input type="text" class="form-control" id="f" name="account" value="{{rand(100000, 999999)}}">
                                        <label for="material-addon-icon2">Account reference</label>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-user"></i>
                                        </span>
                                    </div>

                                    <div class="form-material form-material-info floating input-group">
                                        <input type="text" class="form-control" id="f" name="amount" value="10">
                                        <label for="material-addon-icon2">Amount to pay</label>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-money"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <textarea class="form-control" id="material-textarea-small2" name="remarks" rows="3">Transaction Description</textarea>
                                        <label for="material-textarea-small2">Description(optional)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <textarea class="form-control" id="material-textarea-small2" name="remarks" rows="3">Transaction Remarks</textarea>
                                        <label for="material-textarea-small2">Remarks(optional)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-alt-primary btn-lg">Pay Now</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="be_forms_elements_material.html" method="post">
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-text2" name="material-text2">
                                        <label for="material-text2">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="password" class="form-control" id="material-password2" name="material-password2">
                                        <label for="material-password2">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="email" class="form-control" id="material-email2" name="material-email2">
                                        <label for="material-email2">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-gridf2" name="material-gridf2">
                                        <label for="material-gridf2">Grid Input</label>
                                    </div>
                                </div>
                                <div class="col-6 row">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-gridl2" name="material-gridl2">
                                        <label for="material-gridl2">Grid Input</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                                        <label for="material-textarea-small2">Textarea Small</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <textarea class="form-control" id="material-textarea-large2" name="material-textarea-large2" rows="8"></textarea>
                                        <label for="material-textarea-large2">Textarea Large</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <!-- For a small sized input you will also have to add .form-material-sm along with .floating class -->
                                    <div class="form-material form-material-sm floating">
                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm2" name="material-input-size-sm2">
                                        <label for="material-input-size-sm2">Small Input Size</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-input-size-normal2" name="material-input-size-normal2">
                                        <label for="material-input-size-normal2">Normal Input Size</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <!-- For a large sized input you will also have to add .form-material-lg along with .floating class -->
                                    <div class="form-material form-material-lg floating">
                                        <input type="text" class="form-control form-control-lg" id="material-input-size-lg2" name="material-input-size-lg2">
                                        <label for="material-input-size-lg2">Large Input Size</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-primary floating">
                                        <input type="text" class="form-control" id="material-color-primary2" name="material-color-primary2">
                                        <label for="material-color-primary2">Primary Color (On focus)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-success floating">
                                        <input type="text" class="form-control" id="material-color-success2" name="material-color-success2">
                                        <label for="material-color-success2">Success Color (On focus)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-info floating">
                                        <input type="text" class="form-control" id="material-color-info2" name="material-color-info2">
                                        <label for="material-color-info2">Info Color (On focus)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-warning floating">
                                        <input type="text" class="form-control" id="material-color-warning2" name="material-color-warning2">
                                        <label for="material-color-warning2">Warning Color (On focus)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material form-material-danger floating">
                                        <input type="text" class="form-control" id="material-color-danger2" name="material-color-danger2">
                                        <label for="material-color-danger2">Danger Color (On focus)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row is-valid">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-valid2" name="material-valid2">
                                        <label for="material-valid2">Valid</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row is-invalid">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-invalid2" name="material-invalid2">
                                        <label for="material-invalid2">Invalid</label>
                                    </div>
                                    <div class="invalid-feedback">Invalid feedback</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-help2" name="material-help2">
                                        <label for="material-help2">With Help</label>
                                        <div class="form-text text-muted text-right">This is some help text!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating input-group">
                                        <input type="text" class="form-control" id="material-addon-text2" name="material-addon-text2">
                                        <label for="material-addon-text2">Text Addon</label>
                                        <span class="input-group-addon">.example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating input-group">
                                        <input type="text" class="form-control" id="material-addon-icon2" name="material-addon-icon2">
                                        <label for="material-addon-icon2">Icon Addon</label>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-disabled2" name="material-disabled2" disabled>
                                        <label for="material-disabled2">Disabled</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material floating">
                                        <select class="form-control" id="material-select2" name="material-select2">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                        <label for="material-select2">Please Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <!-- END Material Design -->
@endsection
