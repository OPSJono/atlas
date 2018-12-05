@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Grid Layout
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Grid Layout
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">UI Features</a>
                </li>
                <li class="breadcrumb-item active">
                   Grid Layout
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-columns"></i> Responsive Grid Examples
                            </h3>
                            <span class="pull-right hidden-xs">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="card-body" id="slim1">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        This demostrates Bootstrap Grid system and how it responds to different screen
                                        sizes.
                                    </p>
                                    <div class="">
                                        <p class="d-lg-block d-md-none d-sm-none d-none">
                                            lg indicates that the large grid displaying. The grid stacks horizontally
                                            &lt; 1200px.
                                        </p>
                                        <p class="d-md-block d-lg-none d-sm-none d-none">
                                            md indicates that the medium grid displaying. The grid stacks horizontally
                                            &lt; 992px.
                                        </p>
                                        <p class="d-sm-block d-lg-none d-md-none d-none">
                                            sm indicates that the small grid displaying. The grid stacks horizontally
                                            &lt; 768px.
                                        </p>
                                        <p class="d-block d-lg-none d-sm-none d-md-none d-xl-none">
                                            xs indicates that the extra small grid displaying. This grid is always
                                            horizontal.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="row px-3">
                                    <div class="col-lg-4 col-md-1 col-sm-3 col-xs-4 text-center grid-success">
                                        <span class="visible-lg">.col-lg-4</span>
                                        <span class="visible-md">.col-md-1</span>
                                        <span class="visible-sm">.col-sm-3</span>
                                        <span class="visible-xs">.col-4</span>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-3 col-xs-4 text-center grid-info">
                                        <span class="visible-lg">.col-lg-4</span>
                                        <span class="visible-md">.col-md-5</span>
                                        <span class="visible-sm">.col-sm-3</span>
                                        <span class="visible-xs">.col-4</span>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 text-center grid-danger">
                                        <span class="visible-lg">.col-lg-4</span>
                                        <span class="visible-md">.col-md-6</span>
                                        <span class="visible-sm">.col-sm-6</span>
                                        <span class="visible-xs">.col-4</span>
                                    </div>
                                    </div>
                                    <div class="grid-section">
                                        <h3>xs Grid</h3>
                                        <div class="row px-3">
                                        <div class="col-5 text-center grid-success">
                                            <div>.col-5</div>
                                        </div>
                                        <div class="col-4 text-center grid-info">
                                            <div>.col-4</div>
                                        </div>
                                        <div class="col-3 text-center grid-danger">
                                            <div>.col-3</div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="grid-section">
                                        <h3>sm Grid</h3>
                                        <div class="row px-3">
                                        <div class="col-sm-2 text-center grid-success">
                                            <div>.col-sm-2</div>
                                        </div>
                                        <div class="col-sm-4 text-center grid-info">
                                            <div>.col-sm-4</div>
                                        </div>
                                        <div class="col-sm-6 text-center grid-danger">
                                            <div>.col-sm-6</div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="grid-section grid-selection1">
                                        <h3>md Grid</h3>
                                        <div class="row px-3">
                                        <div class="col-md-2 text-center grid-success">
                                            <div>.col-md-2</div>
                                        </div>
                                        <div class="col-md-4 text-center grid-info">
                                            <div>.col-md-4</div>
                                        </div>
                                        <div class="col-md-6 text-center grid-danger">
                                            <div>.col-md-6</div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="grid-section grid-selection2">
                                        <h3>lg Grid</h3>
                                        <div class="row px-3">
                                        <div class="col-lg-4 text-center grid-success">
                                            <div>.col-lg-4</div>
                                        </div>
                                        <div class="col-lg-4 text-center grid-info">
                                            <div>.col-lg-4</div>
                                        </div>
                                        <div class="col-lg-4 text-center grid-danger">
                                            <div>.col-lg-4</div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content ends-->
            <!-- row -->
        @include('layouts.right_sidebar')
        <!-- right side bar end -->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!-- end of page level js -->
@stop
