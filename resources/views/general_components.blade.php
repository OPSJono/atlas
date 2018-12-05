@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        General Components
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/alertmessage.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                General Components
            </h1>


            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">UI Features</a>
                </li>
                <li class="breadcrumb-item active">
                    General Components
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">

                <div class="col-12">
                    <div class="card border-info">
                        <div class="card-header text-white bg-info border-info">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-angle-double-right"></i> Breadcrumbs
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="bs-example">
                                <ul class="breadcrumb">
                                    <li class="next breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="next breadcrumb-item">
                                        <a href="#">
                                            UI Features
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">Pickers</li>
                                </ul>
                                <ul class="breadcrumb breadcrumb1">
                                    <li class="next1 breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next1 breadcrumb-item">
                                        <a href="#">Charts</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Flot Charts
                                    </li>
                                </ul>
                                <ul class="breadcrumb breadcrumb3"  style="margin-bottom: 20px;">
                                    <li class="next2 breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next2 breadcrumb-item">
                                        <a href="#">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Data Tables
                                    </li>
                                </ul>
                                <ul class="breadcrumb breadcrumb2" style="margin-bottom: 15px;">
                                    <li class="next breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next1 breadcrumb-item">
                                        <a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Form Elements
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary border-primary">
                            <h3 class="card-title d-inline">
                                Card Primary
                            </h3>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card border-success">
                        <div class="card-header text-white bg-success border-success">
                            <h3 class="card-title d-inline">
                                Card Success
                            </h3>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning border-warning">
                            <h3 class="card-title d-inline">
                                Card Warning
                            </h3>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card border-danger">
                        <div class="card-header text-white bg-danger border-danger">
                            <h3 class="card-title d-inline">
                                Card Danger
                            </h3>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary border-primary">
                            <h3 class="card-title d-inline">
                                Tabbed card
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item ">
                                        <a href="#tab_1" data-toggle="tab" class="nav-link active">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab_2"  class="nav-link" data-toggle="tab">Tab 2</a>
                                    </li>
                                    <li class="nav-item gear-pullright">
                                        <a href="#" class="nav-link text-muted">
                                            <i class="fa fa-gear"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="slim1">
                                    <div class="tab-pane active" id="tab_1">
                                        <br>
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, sites still in their infancy.
                                        </p>
                                        <p>
                                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of letters, more-or-less readable English.
                                        </p>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout.
                                        </p>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <br>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout.
                                        </p>
                                        <p>
                                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of letters, readable English.
                                        </p>
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, sites still in their infancy.
                                        </p>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-12">
                    <div class="card border-info">
                        <div class="card-header text-white bg-info border-info">
                            <h3 class="card-title d-inline">Card Info</h3>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. The point of
                                using
                                Lorem Ipsum is that it has a more-or-less normal.
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card border-default">
                                 <div class="card-header  bg-default">
                                     <h3 class="card-title d-inline">
                                         Card Default
                                     </h3>
                                 </div>
                                 <div class="card-body">
                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. The point of
                                     using
                                     Lorem Ipsum is that it has a more-or-less normal.
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-success">
                        <div class="card-header text-white bg-success border-success">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-exclamation-circle"></i> Basic Alerts
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success">

                                    Well done! You successfully read this important alert message.

                            </div>
                            <div class="alert alert-info">

                                    Heads up! This alert needs your attention, but it's not super important.

                            </div>
                            <div class="alert alert-warning">
                                    Warning! Better check yourself, you're not looking too good.

                            </div>
                            <div class="alert alert-danger">
                                    Oh snap! Change a few things up and try submitting again.

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning border-warning">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-bell"></i> Dismissable Alerts
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <strong>Well done!</strong> You successfully read this important alert message.
                            </div>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <strong>Heads up!</strong> This alert needs your attention, but it's not super
                                important.
                            </div>
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                            </div>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-info">
                        <div class="card-header text-white bg-info border-info">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-link"></i> Links in Alerts
                            </h3>
                            <a class=" text-white" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1">

                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                            </a>
                        </div>
                        <div class="collapse show" id="collapseExample1">

                        <div class="card-body">
                            <div class="alert alert-success">
                                <strong>Well done!</strong> You successfully read
                                <a href="#" class="alert-link">
                                    this important alert message.
                                </a>
                            </div>
                            <div class="alert alert-info">
                                <strong>Heads up!</strong> This
                                <a href="#" class="alert-link">
                                    alert needs your attention,
                                </a> but it's not super important.
                            </div>
                            <div class="alert alert-warning">
                                <strong>Warning!</strong> Better check yourself,
                                <a href="#" class="alert-link">
                                    you're not looking too good.
                                </a>
                            </div>
                            <div class="alert alert-danger">
                                <strong>Oh snap!</strong>
                                <a href="#" class="alert-link">
                                    Change a few things up
                                </a> and try submitting again.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning border-warning">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-comment-o"></i> Notes
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="alert-message alert-message-success">
                                <h4>
                                    Alert Message Success
                                </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    <strong>
                                        strong message
                                    </strong> .
                                </p>
                            </div>
                            <div class="alert-message alert-message-default">
                                <h4>
                                    Alert Message Default
                                </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    <strong>
                                        strong message
                                    </strong> .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary border-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-tasks"></i> Different Size Progress Bars
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                No class
                                <div class="progress ">
                                    <div class="progress-bar progress-bar-primary bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">
                                                40% Complete (success)
                                            </span>
                                    </div>
                                </div>
                                Class:
                                <code>.sm</code>
                                <div class="progress sm  active">
                                    <div class="progress-bar progress-bar-success bg-success progress-bar-striped" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">
                                                20% Complete
                                            </span>
                                    </div>
                                </div>
                                Class:
                                <code>.xs</code>
                                <div class="progress progress-xs progress_task ">
                                    <div class="progress-bar progress-bar-warning bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">
                                                60% Complete (warning)
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card card-default">
                        <div class="card-header   bg-default ">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-bars"></i> Progress Bars
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">
                                                40% Complete (success)
                                            </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">
                                                20% Complete
                                            </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">
                                                60% Complete (warning)
                                            </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">
                                                80% Complete
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning border-warning">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-header"></i> Typography Heading
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body text-center">
                                <h1 class="mb-4 mt-3">
                                    h1. Bootstrap heading
                                </h1>
                                <h2 class="mb-4">
                                    h2. Bootstrap heading
                                </h2>
                                <h3 class="mb-3">
                                    h3. Bootstrap heading
                                </h3>
                                <h4 class="mb-3">
                                    h4. Bootstrap heading
                                </h4>
                                <h5 class="mb-3">
                                    h5. Bootstrap heading
                                </h5>
                                <h6 class="mb-3">
                                    h6. Bootstrap heading
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary border-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-align-justify"></i> Horizontal Description
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <dl class="row">
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">
                                        Description lists
                                    </dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        A description list is perfect for defining terms.
                                    </dd>
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">Question</dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        Vestibulum id ligula porta felis euismod semper eget lacinia odio.
                                    </dd>
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">
                                        Progress bar
                                    </dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        Etiam porta sem malesuada magna mollis euismod.
                                    </dd>
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">Answer</dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, justo
                                        sit amet risus.
                                    </dd>
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">
                                        Description lists
                                    </dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        A description list is perfect for defining terms.
                                    </dd>
                                    <dt class="col-lg-5 col-md-5 col-12 text-lg-right text-md-right text-left">Question</dt>
                                    <dd class="col-lg-7 col-md-7 col-12">
                                        Vestibulum id ligula porta felis euismod semper.
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning border-warning">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-list"></i> Unstyled List
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <ul class="list-unstyled">
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ul>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary border-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-list-ul"></i> Unordered List
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body styled-list">
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ul>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card border-danger">
                        <div class="card-header text-white bg-danger border-danger">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-list-ol"></i> Ordered Lists
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <ol>
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ol>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ol>
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
