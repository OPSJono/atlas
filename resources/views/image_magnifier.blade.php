@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Image Magnifier
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-magnify/css/bootstrap-magnify.min.css')}}" />
    <style>
        /*image overlapping in magification*/
        .magnify .magnify {
            z-index: 2;
        }
        .magnify .magnify-large{
            z-index: 4;
        }
        @media(max-width: 767px) {
            .row_div{
                margin-top: 15px !important;
            }
        }
    </style>
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Image Magnifier
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Gallery</a>
                </li>
                <li class="breadcrumb-item active">

                    Image Magnifier
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-primary" style="margin-bottom:70px;">
                        <div class="card-header text-white bg-primary">
                            <h3 class="card-title d-inline">
                                <i class="livicon" data-name="zoom-in" data-c="#fff" data-hc="#fff" data-size="18"
                                   data-loop="true"></i>
                                Image Magnifier
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row" style="margin-top:20px; margin-bottom:20px">
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" class="mag-style img-fluid"
                                             src="{{asset('assets/img/gallery/thumbs/24.jpg')}}" alt="image">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/30.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/20.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/29.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                            </div>
                            <!--row-->
                            <div class="row" style="margin-top:20px; margin-bottom:20px">
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/29.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/8.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/31.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/20.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-top:20px; margin-bottom:20px">
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/30.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/32.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/17.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/8.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-top:20px; margin-bottom:20px">
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/31.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/8.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/30.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 row_div">
                                    <a class="mag img-responsive">
                                        <img data-toggle="magnify" src="{{asset('assets/img/gallery/thumbs/29.jpg')}}" alt="image"
                                             class="mag-style img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        @include('layouts.right_sidebar')
        <!-- right side bar end -->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap-magnify/js/bootstrap-magnify.js')}}" ></script>
    <!-- end of page level js -->
@stop
