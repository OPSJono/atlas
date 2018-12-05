<!DOCTYPE html>
<html>

<head>
    <title>::404 Page::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- global level css -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{asset('assets/css/404.css')}}" rel="stylesheet">
    <!-- end of page level styles-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        {{--<div class="err-cont">--}}
            {{--<div class="col-md-12  col-sm-8  col-10 mx-auto">--}}
                {{--<div class="row">--}}
                <div class="col-sm-6">
                    <div class="error_type text-center d-lg-none d-md-none d-sm-none d-block">404</div>
                    <p class="error text-center d-lg-none d-md-none d-sm-none d-block">error</p>
                    <div class="text-center robot float-right"><img src="{{asset('assets/img/pages/404.png')}}" alt="server break"></div>
                </div>
                <div class="col-sm-3  align-self-start">
                    <div class="text-center">
                        <div class="error_type d-none d-sm-block">404</div>
                        <p class="error d-none d-sm-block">error</p>
                        <div class="error_msg"><p>Sorry, The page is missing</p></div>
                        <hr class="seperator" >
                        <a href="index" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
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

