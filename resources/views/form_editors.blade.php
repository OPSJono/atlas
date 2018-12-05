@extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Form Editors
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}" />
    <link rel="stylesheet" media="screen" type="text/css" href="{{asset('assets/vendors/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/trumbowyg/css/trumbowyg.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/form_editors.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Editors
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active">
                    Form Editors
                </li>
            </ol>
            {{--<ol class="breadcrumb">--}}
                {{--<li>--}}
                    {{--<a href="index">--}}
                        {{--<i class="fa fa-fw fa-home"></i> Dashboard--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Forms</a>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--Form Editors--}}
                {{--</li>--}}
            {{--</ol>--}}
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <!-- /.box -->
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    <div class="text-white bootstrap-admin-box-title editor-clr"">
                        <h3 class="card-title text-white">
                            Bootstrap WYSIHTML5
                        </h3>
                    </div>
                </div>
                <!--main content-->
                <div class="card-body flip_editing">
                    <!-- /.box -->
                    <div class='box '>
                        <div class='box-header'>
                            <h3 class='box-title text-info'>
                                Bootstrap WYSIHTML5
                                <small class="text-info">Simple editor</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools"></div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class='box-body'>
                            <form>
                                <textarea class="textarea editor-cls" placeholder="Place some text here"></textarea>
                            </form>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
            </div>
            <div class="card border-success">
                <div class="card-header text-white bg-success">
                    <div class="text-white bootstrap-admin-box-title editor-clr">
                        <h3 class="card-title">
                            Summer Note</h3>
                    </div>
                </div>
                <div class="card-body panel_bgcolor">
                    <div class="bootstrap-admin-card-content summer_noted">
                        <div id="summernote"></div>
                    </div>
                </div>
            </div>
            <div class="card border-info">
                <div class="card-header text-white bg-info">
                    <div class="text-muted bootstrap-admin-box-title editor-clr">
                        <h3 class="card-title text-white">
                            Flip Editor</h3>
                    </div>
                </div>
                <div class="card-body panel_bgcolor ">
                    <div class="row">
                        <div class="bootstrap-admin-card-content flip_editing col-12">
                            <textarea class="" id="split_editor"></textarea>
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
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/trumbowyg/js/trumbowyg.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/summernote/summernote-bs4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/form_editors.js')}}" ></script>
    <!-- end of page level js -->
@stop
