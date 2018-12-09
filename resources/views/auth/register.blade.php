<!DOCTYPE html>
<html>

<head>
    <title>::Admin Register::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" />
    <!-- global css -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link href="{{asset('assets/css/register2.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body class="bg-slider">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">

        <div class="col-lg-10 col-md-12  col-sm-12  col-10 register-content mx-auto ">
            <div class="row">
               <div class="col-12">
                   <div class="header">
                       <h2 class="text-center" style="vertical-align: middle">
                           Sign Up
                           <small> with</small>
                           <span class="good-times">Atlas</span>
                       </h2>
                   </div>
               </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-lg-12 col-12 core-register">
                    <form class="form-horizontal" method="POST" action="{{ route('auth.register') }}" id="register_form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group {{ $errors->has('forename') ? 'has-error' : null }}">
                                    <label class="control-label" for="forename">FORENAME</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="John"
                                               name="forename" id="forename" value="{{ \Illuminate\Support\Facades\Request::old('forename', '') }}"/>
                                        @if($errors->has('forename'))
                                            <small class="help-block" data-bv-for="password">{{ $errors->first('forename') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 pl-lg-0 pl-3">
                                <div class="form-group {{ $errors->has('surname') ? 'has-error' : null }}">
                                    <label class="control-label" for="surname">SURNAME</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Smith"
                                               name="surname" id="surname" value="{{ \Illuminate\Support\Facades\Request::old('surname', '') }}"/>
                                        @if($errors->has('surname'))
                                            <small class="help-block" data-bv-for="password">{{ $errors->first('surname') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
                                    <label class="control-label" for="email">EMAIL</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="John@smith.com" class="form-control" name="email"
                                               id="email" value="{{ \Illuminate\Support\Facades\Request::old('email', '') }}"/>
                                        @if($errors->has('email'))
                                            <small class="help-block" data-bv-for="password">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 pl-lg-0 pl-3">
                                <div class="form-group" {{ $errors->has('email_confirmation') ? 'has-error' : null }}>
                                    <label class="control-label" for="email_confirmation">CONFIRM EMAIL</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="John@smith.com" class="form-control" name="email_confirmation"
                                               id="email_confirmation" value="{{ \Illuminate\Support\Facades\Request::old('email_confirmation', '') }}"/>
                                        @if($errors->has('email_confirmation'))
                                            <small class="help-block" data-bv-for="password">{{ $errors->first('email_confirmation') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row password">
                            <div class="col-lg-6 col-12 ">
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
                                    <label class="control-label" for="password">PASSWORD</label>
                                    <div class="input-group">
                                        <input type="password" placeholder="Password" class="form-control"
                                               name="password" id="password"/>
                                        @if($errors->has('password'))
                                            <small class="help-block"  data-bv-for="password">{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 pl-lg-0 pl-3">
                                <div class="form-group cp-group {{ $errors->has('password_confirmation') ? 'has-error' : null }}">
                                    <label class="control-label confirm_pwd" for="password_confirmation">CONFIRM PASSWORD</label>
                                    <div class="input-group pull-right">
                                        <input type="password" placeholder="Confirm Password" class="form-control"
                                               name="password_confirmation" id="password_confirmation"/>
                                        @if($errors->has('password_confirmation'))
                                            <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group agree-formgroup mt-3 ">
                                <label class="checkbox-inline sr-only" for="terms">Agree to terms and conditions</label>
                                <input type="checkbox" value="1" name="terms" id="terms"/>&nbsp;
                                <label for="terms"> I agree to <a href="#section"> Terms and Conditions</a>.</label>
                        </div>
                        <div class="form-group ">
                                <button type="submit" class="btn btn-primary" >Sign Up</button>
                                <input type="reset" class="btn btn-default" value="Reset" id="dee1"/><br>
                                <hr>
                                <span> Already Have an account? <a href="{{URL::to('login')}}">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- global js -->
<script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/backstretch.js')}}"></script>
<script src="{{asset('assets/js/custom_js/register.js')}}"></script>
<!-- end of page level js -->
</body>

</html>
