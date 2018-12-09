<!DOCTYPE html>
<html>

<head>
    <title>Lockscreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}"/>

    <!-- styles -->
    <!--global css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <!--end global css -->

    <!--page level css -->
    <link href="{{asset('assets/css/lockscreen2.css')}}" rel="stylesheet">
    <!--end page level css-->
</head>

<body class="background-img">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-6  col-10 mx-auto">
            <div class="lockscreen-container">
                <div id="output"></div>
                <div class="user-name">
                    <h4 class="text-center">{{ Auth::user()->display_name }}</h4>
                    @if(session('lock-expires-at'))
                        <small>Locked {{ session('lock-expires-at')->diffForHumans() }}</small>
                    @endif
                </div>
                <div class="avatar"></div>
                <div class="form-box">
                    <form action="{{ route('auth.login.unlock') }}" method="POST" id="authentication">
                        <div class="form">
                            @csrf
                            <h4>
                                <small class="locked">Enter your Password to Unlock</small>
                            </h4>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
                                <input type="password" placeholder="Password" class="form-control"
                                       name="password" id="password"/>
                                @if($errors->has('password'))
                                    <small class="help-block" data-bv-for="password">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <a href="{{ route('auth.logout') }}" class="btn btn-default logout-btn pull-left"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                            <button type="submit" class="btn btn-primary login-btn pull-right">Unlock <i class="fa fa-fw fa-lock lock-btn"></i></button>
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
<script src="{{asset('assets/js/lockscreen2.js')}}"></script>
<!-- end of page css -->
</body>

</html>