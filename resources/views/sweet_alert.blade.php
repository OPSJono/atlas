@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Sweet Alert
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/sweetalert2/css/sweetalert2.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/sweet_alert2.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Sweet Alert
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">UI Features</a>
            </li>
            <li class="breadcrumb-item active">
                Sweet Alert
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header text-white bg-success">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            Sweet Alerts
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!--=============card content starting=============-->
                        <div class="row m-40">
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body success_alert text-center">
                                        <h5> Success Alert <i class="fa fa-check-circle-o"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body ok_message text-center">
                                        <h5> Ok Message <i class="fa fa-thumbs-o-up"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body basicalert text-center ">
                                        <h5> Alert <i class="fa fa-bell-o"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body ip_alert text-center">
                                        <h5> Ip Alert <i class="fa fa-info-circle"></i></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--first row end-->
                        <div class="row m-40">
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body custom_icon text-center">
                                        <h5> Custom Image <i class="fa fa-picture-o"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body custom_html text-center">
                                        <h5> Custom Html <i class="fa fa-code"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body auto_close text-center">
                                        <h5> Alert Auto Close <i class="fa fa-magic"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body prom_alert text-center">
                                        <h5> Prompt Alert <i class="fa fa-tree"></i></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second row end-->
                        <div class="row m-40">
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body text-center" id="info-alert">
                                        <h5> Info Alert <i class="fa fa-info"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body text-center" id="success-alert">
                                        <h5> Successfully <i class="fa fa-check"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body text-center" id="warning-alert">
                                        <h5> Warning Alert <i class="fa fa-exclamation"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card  card-default hvr-sweep-to-right">
                                    <div class="card-body text-center" id="danger-alert">
                                        <h5> Danger Alert <i class="fa fa-times"></i></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--third row end-->
                        <!--=================== card content end ======================-->
                    </div>
                    <!--end of card body-->
                </div>
            </div>
        </div>
        <!--row end-->
        @include('layouts.right_sidebar')
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{asset('assets/vendors/sweetalert2/js/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom_js/sweetalert.js')}}"></script>
    <!-- end of page level js -->
@stop
