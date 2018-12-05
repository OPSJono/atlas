@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Advanced Maps
        @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')

    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/leaflet/css/leaflet.css')}}"/>
    <!-- end of page level css-->
    @stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Advanced Maps
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Maps</a>
                </li>
                <li class="breadcrumb-item active">

                    Advanced Maps
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-success">
                        <div class="card-header text-white bg-success">
                            <h4 class="card-title d-inline">
                                <i class="fa fa-fw fa-location-arrow"></i> Basic
                            </h4>
                            <span class="pull-right">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body" style="padding:10px !important;">
                            <div id="advanced_map" class="gmap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        @include('layouts.right_sidebar')
            <!-- /.modal ends here -->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/leaflet/js/leaflet-src.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/advanced_maps.js')}}"></script>
<!-- end of page level js -->
@stop