<!DOCTYPE html>
<html>

<head>
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" />
    <!-- Bootstrap -->
    <!-- global css -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link href="{{asset('assets/css/login2.css')}}" rel="stylesheet">
    <!--end page level css-->
</head>

<body class="bg-slider">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">
        <div class="col-lg-10 col-md-12  col-sm-12  col-12 mx-auto login-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center" style="vertical-align: middle">
                            Login
                            <small> with</small>
                            <span class="good-times">Atlas</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-lg-12 col-12 core-login">
                    <form class="form-horizontal" method="POST" action="{{ route('auth.login') }}" id="authentication">
                        <!-- CSRF Token -->
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
                                    <label class="control-label" for="password">PASSWORD</label>
                                    <div class="input-group">
                                        <input type="password" placeholder="Password" class="form-control"
                                               name="password" id="password"/>
                                        @if($errors->has('password'))
                                            <small class="help-block" data-bv-for="password">{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember"> &nbsp;
                            <label for="remember"> Remember Me </label>
                            <a href="{{ route('auth.forgot_password') }}" id="forgot" class="text-primary forgot1  pull-right"> Forgot Password? </a>
                        </div>
                        <div class="form-group ">
                            <button type="submit"  class="btn btn-primary login-btn">Login</button>
                            <br>
                            <hr>
                            <span> New to Atlas?<a href="{{route('auth.register')}}"> Sign Up</a></span>
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
<script src="{{asset('assets/js/backstretch.js')}}"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/login.js')}}"></script>
<!-- end of page level js -->
</body>

</html>
