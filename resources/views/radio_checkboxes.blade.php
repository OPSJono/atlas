@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Radio and Checkbox
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <!-- daterange picker -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <!--prettycheckable --->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/prettycheckable/css/prettyCheckable.css')}}"/>
    <!-- labelauty -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/jquerylabel/css/jquery-labelauty.css')}}"/>
    <!--select css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}"/>
    <!--clock face css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/clockpicker/css/bootstrap-clockpicker.min.css')}}">
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-fileinput/css/fileinput.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/build.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/radio_checkbox.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Radio and Checkbox
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Forms</a>
            </li>
            <li class="breadcrumb-item active">
               Radio and Checkbox
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border-danger">
                    <div class="card-header text-white bg-danger">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-check-circle-o"></i> iCheck - Checkbox Inputs
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="square-blue" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square-blue"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square-blue" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Square blue skin checkbox
                                </label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Flat red skin checkbox
                                </label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal skin checkbox
                                </label>
                            </div>
                            <!-- Minimal red style -->
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal-red" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-red"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-red" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal red skin checkbox
                                </label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal-green" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-green"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-green" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal green skin checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border-info">
                    <div class="card-header text-white bg-info">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-life-ring"></i> iCheck - Radio Inputs
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <input type="radio" name="optionsRadios" value="option1" class="square-blue"
                                       checked>
                            </label>
                            <label>
                                <input type="radio" name="optionsRadios" value="option1" class="square-blue">
                            </label>
                            <label>
                                <input type="radio" name="optionsRadios" value="option1" class="square-blue"
                                       disabled/>
                            </label>
                            <label class="m-l-10">
                                Square blue skin radio
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r3" class="flat-red" checked/>
                            </label>
                            <label>
                                <input type="radio" name="r3" class="flat-red"/>
                            </label>
                            <label>
                                <input type="radio" name="r3" class="flat-red" disabled/>
                            </label>
                            <label class="m-l-10">
                                Flat red skin radio
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r1" class="minimal" checked/>
                            </label>
                            <label>
                                <input type="radio" name="r1" class="minimal"/>
                            </label>
                            <label>
                                <input type="radio" name="r1" class="minimal" disabled/>
                            </label>
                            <label class="m-l-10">
                                Minimal skin radio
                            </label>
                        </div>
                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r2" class="minimal-red" checked/>
                            </label>
                            <label>
                                <input type="radio" name="r2" class="minimal-red"/>
                            </label>
                            <label>
                                <input type="radio" name="r2" class="minimal-red" disabled/>
                            </label>
                            <label class="m-l-10">
                                Minimal red skin radio
                            </label>
                        </div>
                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r4" class="minimal-green" checked/>
                            </label>
                            <label>
                                <input type="radio" name="r4" class="minimal-green"/>
                            </label>
                            <label>
                                <input type="radio" name="r4" class="minimal-green" disabled/>
                            </label>
                            <label class="m-l-10">
                                Minimal green skin radio
                            </label>
                        </div>
                        <!-- radio -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-check-square"></i> Labelauty Radio and Checkboxes
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" id="lby-content">
                        <div class="row" id="lby-demo">

                            <div class="col-lg-6 col-md-6 col-12">
                                <h4>Labeled Checkboxes</h4>
                                <label>
                                    <input class="to-labelauty synch-icon1" data-labelauty="Unselected|Australia"
                                           type="checkbox" checked/>
                                </label>
                                <label>
                                    <input class="to-labelauty terms-icon" type="checkbox"
                                           data-labelauty="Unselected|Selected"/>
                                </label>
                                <label>
                                    <input class="to-labelauty synch-icon" type="checkbox"
                                           data-labelauty="I am disabled!" disabled/>
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <h4>Non-labeled Check</h4>
                                <label><input class="to-labelauty-icon check-icon" type="checkbox" checked/></label>
                                <label><input class="to-labelauty-icon check-icon" type="checkbox"/></label>
                                <label><input class="to-labelauty-icon check-icon" type="checkbox" disabled
                                              checked/></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h4>Labeled Radio Buttons</h4>
                                <label>
                                    <input class="to-labelauty synch-icon2" type="radio" name="rd2"
                                           data-labelauty="Unselected|USA"/>
                                </label>
                                <label>
                                    <input class="to-labelauty terms-icon" type="radio" name="rd2"
                                           data-labelauty="Unselected|Selected" checked/>
                                </label>
                                <label>
                                    <input class="to-labelauty synch-icon" type="radio" name="rd3" disabled
                                           checked/>
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <h4>Non-labeled Radio</h4>
                                <label><input class="to-labelauty-icon" type="radio" name="rd4" checked/></label>
                                <label><input class="to-labelauty-icon" type="radio" name="rd4"/></label>
                                <label><input class="to-labelauty-icon" type="radio" name="rd3" disabled
                                              checked/></label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border-success">
                    <div class="card-header text-white bg-success">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-check-square-o"></i> jQuery prettyCheckable
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Test1">Right positioned label</label>
                            <input type="checkbox" class="test1" value="1" id="Test1" name="Test1" checked/>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="TestDisabled" value="3" id="TestDisabled"
                                       name="TestDisabled" disabled data-label='Disabled Checkbox'>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="test2" value="2" id="Test2" name="Test2"
                                       data-label="Left positioned label" data-labelPosition="left"/>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="test_radio">Radios! </label>
                            <label>
                                <input type="radio" class="test3" value="1" id="Test3_0" name="Test3" data-label="Yes"
                                       checked data-customclass="margin-right"/>
                            </label>
                            <label>
                                <input type="radio" class="test4" value="2" id="Test3_1" name="Test3" data-label="No"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-check-circle"></i> Awesome Radio &amp; Checkbox
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 awesomeradio_grid_sep">

                                       <h4>Checkboxes</h4>
                                        <div class="row">

                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox">
                                                    <input class="form-check-input" id="checkbox1" type="checkbox">
                                                    <label class="form-check-label" for="checkbox1">
                                                        Default
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                   <div class="form-check abc-checkbox abc-checkbox-primary">
                                                    <input class="form-check-input" id="checkbox2" type="checkbox" >
                                                    <label class="form-check-label" for="checkbox2">
                                                        Primary
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox abc-checkbox-success ">
                                                    <input class="form-check-input" id="checkbox3" type="checkbox">
                                                    <label class="form-check-label" for="checkbox3">
                                                        Success
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox abc-checkbox-info ">
                                                    <input class="form-check-input" id="checkbox4" type="checkbox">
                                                    <label class="form-check-label" for="checkbox4">
                                                        Info
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox abc-checkbox-warning">
                                                    <input class="form-check-input" id="checkbox5" type="checkbox" >
                                                    <label class="form-check-label" for="checkbox5">
                                                        Warning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox abc-checkbox-danger">
                                                    <input class="form-check-input" id="checkbox6" type="checkbox" >
                                                    <label class="form-check-label" for="checkbox6">
                                                        Danger
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <h4>Inline checkboxes</h4>

                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1"> Inline One </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">

                                                <div class="form-check abc-checkbox form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox2"> Inline Two </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12">

                                                <div class="form-check abc-checkbox form-check-inline pt-3">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox3"> Inline Three </label>
                                                </div>
                                            </div>
                                        </div>



                                            <h4 class="mt-3">Circled checkboxes</h4>
                                            <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox abc-checkbox-circle">
                                                    <input class="form-check-input" id="checkbox7" type="checkbox">
                                                    <label class="form-check-label" for="checkbox7">
                                                        Simply Rounded
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox abc-checkbox-info abc-checkbox-circle">
                                                    <input class="form-check-input" id="checkbox8" type="checkbox" >
                                                    <label class="form-check-label" for="checkbox8">
                                                        Me too
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    <h4>Disabled</h4>

                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox">
                                                    <input class="form-check-input" id="checkbox9" type="checkbox" disabled>
                                                    <label class="form-check-label" for="checkbox9">
                                                        Can't check
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox abc-checkbox-success">
                                                    <input class="form-check-input" id="checkbox10" type="checkbox" disabled checked>
                                                    <label class="form-check-label" for="checkbox10">
                                                        This too
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-12 py-3">
                                                <div class="form-check abc-checkbox abc-checkbox-warning abc-checkbox-circle">
                                                    <input class="form-check-input" id="checkbox11" type="checkbox" disabled checked>
                                                    <label class="form-check-label" for="checkbox11">
                                                        And this
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    <h4>Checkboxes with indeterminate state</h4>

                                    <div class="row">
                                            <div class="col-12">
                                                <div class="form-check radio-abccheckbox abc-checkbox abc-checkbox-primary">
                                                    <input class="form-check-input" id="indeterminateCheckbox" type="checkbox" onclick="changeState(this)">
                                                    <label class="form-check-label inderminatecheckbox" for="indeterminateCheckbox"></label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                <div class="col-md-6 col-12 mt-2">
                                    <h4>Radios</h4>

                                        <div class="row">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12 py-lg-3 py-md-3 py-1">
                                                <div class="form-check abc-radio pb-2">
                                                    <input class="form-check-input" type="radio" name="radio1" id="radio1" value="option1" >
                                                    <label class="form-check-label" for="radio1">
                                                        Small
                                                    </label>
                                                </div>

                                                <div class="form-check abc-radio pb-lg-2 pb-md-2 pb-1">
                                                    <input class="form-check-input" type="radio" name="radio1" id="radio2" value="option2">
                                                    <label class="form-check-label" for="radio2">
                                                        Big
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12 py-lg-3 py-md-3 py-0">
                                                <div class="form-check abc-radio abc-radio-danger pb-2">
                                                    <input class="form-check-input" type="radio" name="radio2" id="radio3" value="option1">
                                                    <label class="form-check-label" for="radio3">
                                                        Next
                                                    </label>
                                                </div>
                                                <div class="form-check abc-radio abc-radio-danger pb-2">
                                                    <input class="form-check-input" type="radio" name="radio2" id="radio4" value="option2" >
                                                    <label class="form-check-label" for="radio4">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    <h4>
                                        Disabled state
                                    </h4>
                                        <div class="row">

                                            <div class="col-md-6 pb-3">
                                                <div class="form-check abc-radio abc-radio-danger">
                                                    <input class="form-check-input" type="radio" name="radio3" id="radio5" value="option1" disabled>
                                                    <label class="form-check-label" for="radio5">
                                                        Next
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 pb-3 ">
                                                <div class="form-check abc-radio">
                                                    <input class="form-check-input" type="radio" name="radio3" id="radio6" value="option2" checked disabled>
                                                    <label class="form-check-label" for="radio6">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    <h4>Inline radios</h4>
                                        <div class="row">

                                            <div class="col-md-6 py-2">
                                                <div class="form-check abc-radio abc-radio-info form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1" name="radioInline" >
                                                    <label class="form-check-label" for="inlineRadio1"> Inline One </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-3">
                                                <div class="form-check abc-radio form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                    <label class="form-check-label" for="inlineRadio2"> Inline Two </label>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <h4>
                                                Radio As Checkboxes
                                            </h4>


                                            <div class="form-check abccheckbox abc-checkbox abc-checkbox-default py-2">
                                                <input type="radio" name="radio4" id="radio7" value="option1" class="form-check-input">
                                                <label for="radio7">
                                                    &nbsp;Default
                                                </label>
                                            </div>
                                            <div class="form-check radio-abccheckbox abc-checkbox abc-checkbox-success pb-2">
                                                <input type="radio" name="radio4" id="radio8" value="option2">
                                                <label for="radio8">
                                                    &nbsp;<span class="text-success">Success</span>
                                                </label>
                                            </div>
                                            <div class="form-check abc-checkbox abc-checkbox-danger pb-2">
                                                <input type="radio" name="radio4" id="radio9" value="option3">
                                                <label for="radio9">
                                                    &nbsp;<span class="text-danger">Danger</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!---prettycheckbale --->
    <script type="text/javascript" src="{{asset('assets/vendors/prettycheckable/js/prettyCheckable.min.js')}}"></script>
    <!--- labelauty -->
    <script type="text/javascript" src="{{asset('assets/vendors/jquerylabel/js/jquery-labelauty.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom_js/radio_checkbox.js')}}"></script>
    <!-- end of page level js -->
@stop
