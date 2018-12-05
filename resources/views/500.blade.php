<!DOCTYPE html>
<html>

<head>
    <title>::500 Page::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" />
    <!-- global level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
    <!-- end of global css-->
    <!-- page level styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/404.css')}}" />
    <!-- end of page level styles-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="err-cont">--}}
            {{--<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">--}}
                <div class="row" dir="rtl">
                    <div class="col-12 col-sm-6 col-sm-push-6">
                        <div class="error_type text-center d-lg-none d-md-none d-sm-none d-block">500</div>
                        <p class="error text-center d-lg-none d-md-none d-sm-none d-block">error</p>
                        <div class="text-center server_img"><img src="{{asset('assets/img/pages/500.png')}}" alt="server break" class="float-left"></div>
                    </div>
                    <div class="col-12 col-sm-4 col-sm-pull-6">
                        <div class="text-center">
                            <div class="error_type d-none d-sm-block">500</div>
                            <p class="error d-none d-sm-block">error</p>
                            <div class="error_msg"><p>Oops! Something wrong with Internal Server</p></div>
                            <hr class="seperator">
                            <a href="index" class="btn btn-primary">Go Home</a>
                        </div>
                    </div>
                </div>
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/app.js')}}" ></script>
<!-- end of global js -->
<script type="text/javascript">
    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
</script>
</body>
</html>
