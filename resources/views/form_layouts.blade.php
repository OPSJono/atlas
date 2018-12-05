    @extends('layouts/default')

    {{-- Page title --}}
    @section('title')
        Form Layouts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/gridforms/css/gridforms.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/form_layouts.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Layouts
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active">
                    Form Layouts
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="  nav-item">
                            <a  class="nav-link active"  class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">
                                Form Actions
                            </a>
                        </li>
                        <li>
                            <a  class="nav-link" id="profile-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">2 Columns</a>
                        </li>
                        <li>
                            <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">
                                Form Striped
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact1" aria-selected="false">
                                Form Full Example
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content m-t-10">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                    <div class="col-xl-6 col-12">
                                        <div class="card border-primary ">
                                            <div class="card-header bg-primary text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Form Actions On Top
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <form action="#" class="">
                                                    <div>
                                                        <div class="row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                &nbsp;
                                                                <button type="button" class="btn btn-danger">Cancel
                                                                </button>
                                                                &nbsp;
                                                                <button type="reset" class="btn btn-default bttn_reset">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-body">
                                                        <div class="form-group m-t-10 row">
                                                            <label for="inputUsername1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Username
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-user-md"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Username" id="inputUsername1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Email
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="text" id="inputEmail" placeholder="Email Address"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputpass" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Password
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-key"></i>
                                                                    </span>
                                                                    <input type="password" placeholder="Password"
                                                                           id="inputpass" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputnumber" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Phone Number
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-phone"></i>
                                                                    </span>
                                                                    <input type="text" placeholder="Phone Number"
                                                                           id="inputnumber" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputAddress" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Address
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control"
                                                                           id="inputAddress" placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputContent1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Message</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <textarea id="inputContent1" rows="3"
                                                                          name="inputContent1"
                                                                          class="form-control resize_vertical"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="card border-success ">
                                            <div class="card-header bg-success text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Form Actions On Bottom
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <form action="#" class="">
                                                    <div class="form-body">
                                                        <div class="form-group row">
                                                            <label for="inputUsername" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Username
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-ground-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-user-md"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control"
                                                                           id="inputUsername" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Email
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="text" id="inputEmail1" placeholder="Email Address"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="keypassword1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Password
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-key"></i>
                                                                    </span>
                                                                    <input type="password" placeholder="Password"
                                                                           id="keypassword1" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputnumber1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Phone Number
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-append">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-phone"></i>
                                                                    </span>
                                                                    <input type="text" id="inputnumber1" placeholder="Phone Number"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputAddress2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Address
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Address" id="inputAddress2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputContent2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Message</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <textarea id="inputContent2" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                &nbsp;
                                                                <button type="button" class="btn btn-danger">Cancel
                                                                </button>
                                                                &nbsp;
                                                                <button type="reset" class="btn btn-default bttn_reset">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card border-info ">
                                            <div class="card-header bg-info text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Form Actions On Top & Bottom
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <form action="#" class="">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12  text-center">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                &nbsp;
                                                                <button type="button" class="btn btn-danger">Cancel
                                                                </button>
                                                                &nbsp;
                                                                <button type="reset" class="btn btn-default bttn_reset">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-body">
                                                        <div class="form-group m-t-10 row">
                                                            <label for="inputUsername2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Username
                                                            </label>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-user-md"></i>
                                                                    </span>
                                                                    <input type="text" id="inputUsername2" class="form-control"
                                                                           placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Email
                                                            </label>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="text" id="inputEmail2" placeholder="Email Address"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="fapassword2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Password
                                                            </label>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-key"></i>
                                                                    </span>
                                                                    <input type="password" placeholder="Password"
                                                                           id="fapassword2" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputnumber2" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Phone Number
                                                            </label>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-phone"></i>
                                                                    </span>
                                                                    <input type="text" id="inputnumber2" placeholder="Phone Number"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputAddress3" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Address
                                                            </label>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-group input-group-prepend">
                                                                        <span class="input-group-text border-right-0 rounded-0">
                                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                                    </span>
                                                                    <input type="text" id="inputAddress3" class="form-control"
                                                                           placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputContent3" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Message</label>
                                                            <div class="col-lg-6 col-12">
                                                                <textarea id="inputContent3" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                &nbsp;
                                                                <button type="button" class="btn btn-danger">Cancel
                                                                </button>
                                                                &nbsp;
                                                                <button type="reset" class="btn btn-default bttn_reset">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                            <div class="row">
                                    <div class="col-xl-6 col-12">
                                        <div class="card border-warning">
                                            <div class="card-header bg-warning text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Left Aligned
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <form action="#">
                                                    <div>
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                        &nbsp;
                                                        <button type="reset" class="btn btn-default bttn_reset">Reset
                                                        </button>
                                                    </div>
                                                    <div class="form-body px-3">
                                                        <div class="form-group m-t-10 row">
                                                            <label for="leftinputUsername" class="col-form-label text-lg-right text-left">
                                                                Username
                                                            </label>
                                                            <div class="input-group input-group-prepend">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-user-md"></i>
                                                                </span>
                                                                <input type="text" id="leftinputUsername" class="form-control"
                                                                       placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="leftinputEmail" class="col-form-label text-lg-right text-left">
                                                                Email
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="text" id="leftinputEmail" placeholder="Email Address"
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="leftvalidpassword" class="col-form-label text-lg-right text-left">
                                                                Password
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-key"></i>
                                                                </span>
                                                                <input type="password" placeholder="Password"
                                                                       id="leftvalidpassword" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="leftinputnumber" class="col-form-label text-lg-right text-left">
                                                                Phone Number
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-phone"></i>
                                                                </span>
                                                                <input type="text" id="leftinputnumber" placeholder="Phone Number"
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="leftinputAddress" class="col-form-label text-lg-right text-left">
                                                                Address
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                                <input type="text" id="leftinputAddress" class="form-control"
                                                                       placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mbn row">
                                                            <label for="leftinputContent"
                                                                   class="col-form-label text-lg-right text-left">Message</label>
                                                            <textarea id="leftinputContent" rows="3"
                                                                      class="form-control resize_vertical"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                        &nbsp;
                                                        <button type="reset" class="btn btn-default bttn_reset">Reset
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="card border-danger">
                                            <div class="card-header bg-danger text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Right Aligned
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <form action="#" class="right_aligned">
                                                    <div class="text-lg-right text-right ">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                        <button type="reset" class="btn btn-default bttn_reset">Reset
                                                        </button>
                                                    </div>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="rightinputUsername" class="col-form-label text-lg-right text-left">
                                                                Username
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-user-md"></i>
                                                                </span>
                                                                <input type="text" id="rightinputUsername" class="form-control"
                                                                       placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rightinputEmail" class="col-form-label text-lg-right text-left">
                                                                Email
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="text" id="rightinputEmail" placeholder="Email Address"
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rightuniquepassword" class="col-form-label text-lg-right text-left">
                                                                Password
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-key"></i>
                                                                </span>
                                                                <input type="password" placeholder="Password"
                                                                       id="rightuniquepassword" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rightinputnumber" class="col-form-label text-lg-right text-left">
                                                                Phone Number
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-phone"></i>
                                                                </span>
                                                                <input type="text" id="rightinputnumber" placeholder="Phone Number"
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rightinputAddress" class="col-form-label text-lg-right text-left">
                                                                Address
                                                            </label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                                <input type="text" id="rightinputAddress" class="form-control"
                                                                       placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mbn">
                                                            <label for="inputContent"
                                                                   class="col-form-label text-lg-right text-left">Message</label>
                                                            <textarea id="inputContent" rows="3"
                                                                      class="form-control resize_vertical"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions text-lg-right text-right ">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                        <button type="reset" class="btn btn-default bttn_reset">Reset
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-primary">
                                        <div class="card-header bg-primary text-white">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-file-text-o"></i> Form 2 Columns Default
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <form class="">
                                                        <div class="form-group row has-success">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-success" for="inputSuccess1">First
                                                                Name
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" id="inputSuccess1"
                                                                       class="form-control"
                                                                       placeholder="Input with success">
                                                                <span class="help-block">
                                                                        First name is too small
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-warning">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-waring" for="inputWarning1">Password</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="password" id="inputWarning1"
                                                                       class="form-control"
                                                                       placeholder="Input with warning">
                                                                <span class="help-block">
                                                                        Password strength: Weak
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-error">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-danger" for="inputError1">Email</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="email" id="inputError1"
                                                                       class="form-control"
                                                                       placeholder="Input with error">
                                                                <span class="help-block">
                                                                        Please enter a valid email address
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <form class="">
                                                        <div class="form-group row has-success has-feedback text-success">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="inputSuccess2">
                                                                Second Name
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" id="inputSuccess2"
                                                                       class="form-control"
                                                                       placeholder="Input with success">
                                                                <span class="fa fa-check form-control-feedback"></span>
                                                                <span class="help-block">
                                                                        Second name is too small
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-warning has-feedback">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-warning" for="inputWarning2">
                                                                Confirm Password
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="password" id="inputWarning2"
                                                                       class="form-control"
                                                                       placeholder="Input with warning">
                                                                <span class="fa fa-exclamation-triangle text-warning form-control-feedback"></span>
                                                                <span class="help-block">
                                                                        Password mis-match
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-error has-feedback">
                                                            <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-danger" for="inputError2">
                                                                Confirm Email
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="email" id="inputError2"
                                                                       class="form-control"
                                                                       placeholder="Input with error">
                                                                <span class="fa fa-close text-danger form-control-feedback"></span>
                                                                <span class="help-block">
                                                                        Email mis-match
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-lg-3 col-md-10">
                                                                <button type="button" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border-warning">
                                        <div class="card-header text-white bg-warning">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-file-text-o"></i> Personal Details Horizontal
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <form method="post" class="">
                                                    <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="first_Name">First
                                                                Name:
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" class="form-control" id="first_Name"
                                                                       placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="input_Email">Email:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="email" class="form-control"
                                                                       id="input_Email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="input_Password">Password:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="password" class="form-control"
                                                                       id="input_Password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12 m-t-10">Date of
                                                                Birth:</label>
                                                            <div class="col-lg-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Date</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                    <option>31</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Month</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Year</option>
                                                                    <option>1991</option>
                                                                    <option>1992</option>
                                                                    <option>1993</option>
                                                                    <option>1994</option>
                                                                    <option>1995</option>
                                                                    <option>1996</option>
                                                                    <option>1997</option>
                                                                    <option>1998</option>
                                                                    <option>1999</option>
                                                                    <option>2000</option>
                                                                    <option>2001</option>
                                                                    <option>2002</option>
                                                                    <option>2003</option>
                                                                    <option>2004</option>
                                                                    <option>2005</option>
                                                                    <option>2006</option>
                                                                    <option>2007</option>
                                                                    <option>2008</option>
                                                                    <option>2009</option>
                                                                    <option>2000</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="Zip_Code">Zip
                                                                Code:
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" class="form-control" id="Zip_Code"
                                                                       placeholder="Zip Code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12"
                                                                   for="city">City:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" class="form-control" id="city"
                                                                       placeholder="City">
                                                            </div>
                                                        </div>
                                                        <div class="form-group rpw">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" value="news"
                                                                           class="square-blue"> Send me latest news and
                                                                    updates.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="last_Name">Last
                                                                Name:
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="text" class="form-control" id="last_Name"
                                                                       placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="phone_Number">Phone:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="tel" class="form-control" id="phone_Number"
                                                                       placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12"
                                                                   for="confirm_Password">Confirm Password:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="password" class="form-control"
                                                                       id="confirm_Password"
                                                                       placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12" for="postal_Address">Address:</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <textarea rows="3" class="form-control resize_vertical"
                                                                          id="postal_Address"
                                                                          placeholder="Postal Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-lg-right text-left col-lg-3 col-12">Gender:</label>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="genderRadios"
                                                                           class="radio-blue"> Male</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="genderRadios"
                                                                           class="radio-blue" value="female"> Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" value="agree"
                                                                           class="square-blue"> I agree to the
                                                                    <a href="#" class="text-primary">Terms and Conditions</a>
                                                                    .
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-actions">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                <button type="reset"
                                                                        class="btn btn-effect-ripple btn-default  reset_btn1">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border-info">
                                        <div class="card-header bg-info text-white">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-file-text-o"></i> Form 2 Columns Readonly
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                      <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                      <i class="fa fa-fw fa-times removepanel"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body px-3 pt-4">
                                            <form action="#" class="">
                                                <div class="form-body">
                                                    <h3>Personal</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">
                                                                    First Name :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">Jenny</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left ">
                                                                    Last Name :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">Kerry</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label for="inputEmail" class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">Email
                                                                    :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">
                                                                        <a href="mailto:whisfat1935@jourrapide.com"
                                                                           class="forgot">
                                                                            Jenny321@example.com
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6 ">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">Gender :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">Female</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">Birthday :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">10.11.1980</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">Phone :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">
                                                                        321-333-5432
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3>Address</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">
                                                                    Address 1 :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-6  pt-2">
                                                                    <p class="form-control-static">
                                                                        1219 Quiet Subdivision
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">
                                                                    Address 2 :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">
                                                                        3536 Petunia Way
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">City :</label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">Albany</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">State :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">New york</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">
                                                                    Country :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">USA</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <label class="col-md-4 col-lg-6 col-12 col-sm-4 col-form-label text-lg-right text-left text-lg-right text-left">
                                                                    Post Code :
                                                                </label>
                                                                <div class="col-lg-6 col-md-8 col-lg-6 col-sm-8 col-12 pt-2">
                                                                    <p class="form-control-static">12203</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade borderstriped" id="tab3" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border-info">
                                        <div class="card-header text-white bg-info">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-crosshairs"></i> Form Bordered Striped
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                      <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                      <i class="fa fa-fw fa-times removepanel"></i>
                                                 </span>
                                        </div>
                                        <div class="card-body border">
                                            <form method="post" enctype="multipart/form-data"
                                                  class=" form-bordered">
                                                <div class="form-group striped-col row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Static</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <p class="form-control-static">
                                                            Static text
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-text-input1">Text</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" id="example-text-input1"
                                                               name="example-text-input" class="form-control"
                                                               placeholder="Text">
                                                        <span class="help-block">
                                                                This is a help text
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-email1">Email</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="email" id="example-email1" name="example-email"
                                                               class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-password1">Password</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="password" id="example-password1"
                                                               name="example-password" class="form-control"
                                                               placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-disabled1">Disabled</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" id="example-disabled1"
                                                               name="example-disabled" class="form-control"
                                                               placeholder="Disabled" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-textarea-input2">Textarea</label>
                                                    <div class="col-lg-6 col-12">
                                                        <textarea id="example-textarea-input2"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-select1">Select</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-select1" name="example-select"
                                                                class="form-control" size="1">
                                                            <option value="0">
                                                                Please select
                                                            </option>
                                                            <option value="1">Bootstrap</option>
                                                            <option value="2">CSS</option>
                                                            <option value="3">JavaScript</option>
                                                            <option value="4">HTML</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-multiple-select2">Multiple</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-multiple-select2"
                                                                name="example-multiple-select" class="form-control"
                                                                size="5" multiple>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                            <option value="6">Option #6</option>
                                                            <option value="7">Option #7</option>
                                                            <option value="8">Option #8</option>
                                                            <option value="9">Option #9</option>
                                                            <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label  text-lg-right text-left m-t-ng-10">Radio
                                                        Buttons</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-radio4">
                                                                <input type="radio" id="example-radio4"
                                                                       name="example-radios" value="option1">&nbsp; HTML</label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio5">
                                                                <input type="radio" id="example-radio5"
                                                                       name="example-radios" value="option2">&nbsp; CSS</label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio6">
                                                                <input type="radio" id="example-radio6"
                                                                       name="example-radios" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label text-lg-right text-left">
                                                        Inline Radio Buttons
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="radio-inline" for="example-inline-radio7">
                                                                    <input type="radio" id="example-inline-radio7"
                                                                           name="example-inline-radios" value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline" for="example-inline-radio8">
                                                                    <input type="radio" id="example-inline-radio8"
                                                                           name="example-inline-radios" value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline" for="example-inline-radio9">
                                                                    <input type="radio" id="example-inline-radio9"
                                                                           name="example-inline-radios" value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label  text-lg-right text-left m-t-ng-10">Checkboxes</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-checkbox4">
                                                                <input type="checkbox" id="example-checkbox4"
                                                                       name="example-checkbox1" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox5">
                                                                <input type="checkbox" id="example-checkbox5"
                                                                       name="example-checkbox2" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox6">
                                                                <input type="checkbox" id="example-checkbox6"
                                                                       name="example-checkbox3" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  radio-form-label text-lg-right text-left">
                                                        Inline Checkboxes
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox7">
                                                                    <input type="checkbox" id="example-inline-checkbox7"
                                                                           name="example-inline-checkbox1"
                                                                           value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox8">
                                                                    <input type="checkbox" id="example-inline-checkbox8"
                                                                           name="example-inline-checkbox2"
                                                                           value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox9">
                                                                    <input type="checkbox" id="example-inline-checkbox9"
                                                                           name="example-inline-checkbox3"
                                                                           value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col ">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin  text-lg-right text-left"
                                                           for="example-file-input1">File</label>
                                                    <div class="col-lg-9 col-12  p-t-24 ">
                                                        <input type="file" id="example-file-input1"
                                                               name="example-file-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin text-lg-right text-left"
                                                           for="example-file-multiple-input1">
                                                        Multiple File
                                                    </label>
                                                    <div class="col-lg-9 col-12  p-t-24">
                                                        <input type="file" id="example-file-multiple-input1"
                                                               name="example-file-multiple-input" multiple>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-actions">
                                                    <div class="col-lg-9 col-12  offset-lg-3">
                                                        <button type="button" class="btn btn-effect-ripple btn-primary">
                                                            Submit
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-effect-ripple btn-default reset_btn2">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card border-warning">
                                        <div class="card-header text-white bg-warning">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-crosshairs"></i> Form Seperated Row Striped
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                      <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                      <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                        </div>
                                        <div class="card-body border">
                                            <form method="post" enctype="multipart/form-data"
                                                  class=" form-bordered-row">
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Static</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <p class="form-control-static">
                                                            Static text
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-text-input2">Text</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" id="example-text-input2"
                                                               name="example-text-input" class="form-control"
                                                               placeholder="Text">
                                                        <span class="help-block">
                                                                This is a help text
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-email2">Email</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="email" id="example-email2" name="example-email"
                                                               class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-password2">Password</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="password" id="example-password2"
                                                               name="example-password" class="form-control"
                                                               placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-disabled2">Disabled</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" id="example-disabled2"
                                                               name="example-disabled" class="form-control"
                                                               placeholder="Disabled" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-textarea-input1">Textarea</label>
                                                    <div class="col-lg-6 col-12">
                                                        <textarea id="example-textarea-input1"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description.."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row  striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-select2">Select</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-select2" name="example-select"
                                                                class="form-control" size="1">
                                                            <option value="0">
                                                                Please select
                                                            </option>
                                                            <option value="1">Bootstrap</option>
                                                            <option value="2">CSS</option>
                                                            <option value="3">JavaScript</option>
                                                            <option value="4">HTML</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-multiple-select1">Multiple</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-multiple-select1"
                                                                name="example-multiple-select" class="form-control"
                                                                size="5" multiple>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                            <option value="6">Option #6</option>
                                                            <option value="7">Option #7</option>
                                                            <option value="8">Option #8</option>
                                                            <option value="9">Option #9</option>
                                                            <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label  text-lg-right text-left m-t-ng-10">Radio
                                                        Buttons</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-radio7">
                                                                <input type="radio" id="example-radio7"
                                                                       name="example-radios" value="option1">&nbsp; HTML</label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio8">
                                                                <input type="radio" id="example-radio8"
                                                                       name="example-radios" value="option2">&nbsp; CSS</label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio9">
                                                                <input type="radio" id="example-radio9"
                                                                       name="example-radios" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label  text-lg-right text-left">
                                                        Inline Radio Buttons
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="radio-inline "
                                                                       for="example-inline-radio10">
                                                                    <input type="radio" id="example-inline-radio10"
                                                                           name="example-inline-radios" value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline"
                                                                       for="example-inline-radio11">
                                                                    <input type="radio" id="example-inline-radio11"
                                                                           name="example-inline-radios" value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline"
                                                                       for="example-inline-radio12">
                                                                    <input type="radio" id="example-inline-radio12"
                                                                           name="example-inline-radios" value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left m-t-ng-10">Checkboxes</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-checkbox13">
                                                                <input type="checkbox" id="example-checkbox13"
                                                                       name="example-checkbox1" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox14">
                                                                <input type="checkbox" id="example-checkbox14"
                                                                       name="example-checkbox2" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox15">
                                                                <input type="checkbox" id="example-checkbox15"
                                                                       name="example-checkbox3" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label text-lg-right text-left">
                                                        Inline Checkboxes
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox16">
                                                                    <input type="checkbox"
                                                                           id="example-inline-checkbox16"
                                                                           name="example-inline-checkbox1"
                                                                           value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox17">
                                                                    <input type="checkbox"
                                                                           id="example-inline-checkbox17"
                                                                           name="example-inline-checkbox2"
                                                                           value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox18">
                                                                    <input type="checkbox"
                                                                           id="example-inline-checkbox18"
                                                                           name="example-inline-checkbox3"
                                                                           value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row striped-col ">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin text-lg-right text-left"
                                                           for="example-file-input2">File</label>
                                                    <div class="col-lg-9 col-12  p-t-24">
                                                        <input type="file" id="example-file-input2"
                                                               name="example-file-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin text-lg-right text-left"
                                                           for="example-file-multiple-input2">
                                                        Multiple File
                                                    </label>
                                                    <div class="col-lg-9 col-12  p-t-24">
                                                        <input type="file" id="example-file-multiple-input2"
                                                               name="example-file-multiple-input" multiple>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-actions">
                                                    <div class="col-lg-9 col-12  offset-lg-3">
                                                        <button type="button" class="btn btn-effect-ripple btn-primary">
                                                            Submit
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-effect-ripple btn-default reset_btn3">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card border-danger">
                                        <div class="card-header text-white bg-danger">
                                            <h3 class="card-title d-inline">
                                                <i class="fa fa-fw fa-crosshairs"></i> Form Bordered
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel"></i>
                                                </span>
                                        </div>
                                        <div class="card-body border">
                                            <form method="post" enctype="multipart/form-data"
                                                  class="form-bordered">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Static</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <p class="form-control-static">
                                                            Static text
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-text-input3">Text</label>
                                                    <div class="col-lg-6 col-12 row">
                                                        <input type="text" id="example-text-input3"
                                                               name="example-text-input" class="form-control"
                                                               placeholder="Text">
                                                        <span class="help-block">
                                                                This is a help text
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-email3">Email</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="email" id="example-email3" name="example-email"
                                                               class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-password3">Password</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="password" id="example-password3"
                                                               name="example-password" class="form-control"
                                                               placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-disabled3">Disabled</label>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" id="example-disabled3"
                                                               name="example-disabled" class="form-control"
                                                               placeholder="Disabled" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-textarea-input3">Textarea</label>
                                                    <div class="col-lg-6 col-12">
                                                        <textarea id="example-textarea-input3"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description.."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-select3">Select</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-select3" name="example-select"
                                                                class="form-control" size="1">
                                                            <option value="0">
                                                                Please select
                                                            </option>
                                                            <option value="1">Bootstrap</option>
                                                            <option value="2">CSS</option>
                                                            <option value="3">JavaScript</option>
                                                            <option value="4">HTML</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                           for="example-multiple-select3">Multiple</label>
                                                    <div class="col-lg-6 col-12">
                                                        <select id="example-multiple-select3"
                                                                name="example-multiple-select" class="form-control"
                                                                size="5" multiple>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                            <option value="6">Option #6</option>
                                                            <option value="7">Option #7</option>
                                                            <option value="8">Option #8</option>
                                                            <option value="9">Option #9</option>
                                                            <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label text-lg-right text-left ">Radio
                                                        Buttons</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-radio10">
                                                                <input type="radio" id="example-radio10"
                                                                       name="example-radios10" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio11">
                                                                <input type="radio" id="example-radio11"
                                                                       name="example-radios10" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-radio12">
                                                                <input type="radio" id="example-radio12"
                                                                       name="example-radios10" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label text-lg-right text-left">
                                                        Inline Radio Buttons
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="radio-inline"
                                                                       for="example-inline-radio13">
                                                                    <input type="radio" id="example-inline-radio13"
                                                                           name="example-inline-radios13"
                                                                           value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline"
                                                                       for="example-inline-radio14">
                                                                    <input type="radio" id="example-inline-radio14"
                                                                           name="example-inline-radios13"
                                                                           value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="radio-inline"
                                                                       for="example-inline-radio15">
                                                                    <input type="radio" id="example-inline-radio15"
                                                                           name="example-inline-radios13"
                                                                           value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label text-lg-right text-left ">Checkboxes</label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div>
                                                            <label for="example-checkbox7">
                                                                <input type="checkbox" id="example-checkbox7"
                                                                       name="example-checkbox7" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox8">
                                                                <input type="checkbox" id="example-checkbox8"
                                                                       name="example-checkbox8" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label for="example-checkbox9">
                                                                <input type="checkbox" id="example-checkbox9"
                                                                       name="example-checkbox9" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label radio-form-label  text-lg-right text-left">
                                                        Inline Checkboxes
                                                    </label>
                                                    <div class="col-lg-9 col-12 ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox4">
                                                                    <input type="checkbox" id="example-inline-checkbox4"
                                                                           name="example-inline-checkbox1"
                                                                           value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox5">
                                                                    <input type="checkbox" id="example-inline-checkbox5"
                                                                           name="example-inline-checkbox2"
                                                                           value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline"
                                                                       for="example-inline-checkbox6">
                                                                    <input type="checkbox" id="example-inline-checkbox6"
                                                                           name="example-inline-checkbox3"
                                                                           value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin text-lg-right text-left"
                                                           for="example-file-input3">File</label>
                                                    <div class="col-lg-9 col-12  p-t-24">
                                                        <input type="file" id="example-file-input3"
                                                               name="example-file-input3">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-12 col-form-label file-margin text-lg-right text-left"
                                                           for="example-file-multiple-input3">
                                                        Multiple File
                                                    </label>
                                                    <div class="col-lg-9 col-12  p-t-24">
                                                        <input type="file" id="example-file-multiple-input3"
                                                               name="example-file-multiple-input3" multiple>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-actions">
                                                    <div class="col-lg-9 col-12  offset-lg-3">
                                                        <button type="button" class="btn btn-effect-ripple btn-primary">
                                                            Submit
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-effect-ripple btn-default reset_btn4">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-12 row">
                                    <div class="col-lg-6 col-12">
                                        <div class="card border-primary">
                                            <div class="card-header text-white bg-primary">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-heart-o"></i> Vertical Form Layout
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="inputEmail3">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail3"
                                                               placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword1"
                                                               placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="margin-right: 7px;"> Remember
                                                            me
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-primary m-t-10">Login
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--select2 starts-->
                                        <div class="card border-success">
                                            <div class="card-header bg-success text-white">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Inline Form Layout
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form class="form-inline inline" role="form">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="inputEmail2">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail2"
                                                               placeholder="Email">
                                                    </div>
                                                    <div class="form-group ml-2 mr-2">
                                                        <label class="sr-only" for="inputPassword2">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword2"
                                                               placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="mar-right4"> Remember me
                                                        </label>
                                                    </div>
                                                    <button type="button" class="btn btn-primary m-t-10 ml-2">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-info">
                                            <div class="card-header text-white bg-info">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Static Form Control
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form class="">
                                                    <div class="form-group row">
                                                        <label for="inputEmail"
                                                               class="col-form-label text-lg-right text-left col-lg-3 col-12">Email</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <p class="form-control-plaintext">
                                                                harrypotter@mail.com
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword" class="col-form-label text-lg-right text-left col-lg-3 col-12">Password</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="password" class="form-control"
                                                                   id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 col-lg-9 col-12 ">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> Remember me
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 col-lg-9 col-12 ">
                                                            <button type="button" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-warning">
                                            <div class="card-header text-white bg-warning">
                                                <h3 class="card-title d-inline d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Grid sizing of Form Elements
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">

                                                            <div class="col-3">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-5">
                                                                <input type="text" class="form-control">
                                                            </div>

                                                    </div>
                                                    <br>
                                                    <div class="row">

                                                            <div class="col-3">
                                                                <textarea
                                                                        class="form-control resize_vertical"></textarea>
                                                            </div>
                                                            <div class="col-4">
                                                                <textarea
                                                                        class="form-control resize_vertical"></textarea>
                                                            </div>
                                                            <div class="col-5">
                                                                <textarea
                                                                        class="form-control resize_vertical"></textarea>
                                                            </div>

                                                    </div>
                                                    <br>
                                                    <div class="row">

                                                            <div class="col-3">
                                                                <select class="form-control">
                                                                    <option>Select</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <select class="form-control">
                                                                    <option>Select</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-5">
                                                                <select class="form-control">
                                                                    <option>Select</option>
                                                                </select>
                                                            </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-danger">
                                            <div class="card-header text-white bg-danger">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Button Dropdowns
                                                </h3>
                                                <span class="pull-right d-none d-sm-block">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                            <div class="col-lg-6 col-12 m-t-10  ">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend dropdown">
                                                                        <button type="button"
                                                                                class="btn btn-info dropdown-toggle"
                                                                                 id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <li class="dropdown-item">
                                                                                <a href="#">Action</a>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#">
                                                                                    Another action
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#">
                                                                                    Separated link
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 m-t-10 ">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <div class="input-group-append dropdown">
                                                                        <button type="button"
                                                                                class="btn btn-info dropdown-toggle"
                                                                                data-toggle="dropdown">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li class="dropdown-item">
                                                                                <a href="#">Action</a>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#">
                                                                                    Another action
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#">
                                                                                    Separated link
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </form>
                                                <div class="col-md-12">
                                                    <hr class="hrlinecolor">
                                                </div>
                                                <form class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <div class="input-group-btn dropdown">
                                                                <button type="button"
                                                                        class="btn btn-warning dropdown-toggle text-white"
                                                                        data-toggle="dropdown">
                                                                    Action
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-item">
                                                                        <a href="#">Action</a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Another action
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Something else here
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Separated link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <br>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-btn dropdown">
                                                                <button type="button"
                                                                        class="btn btn-warning dropdown-toggle text-white"
                                                                        data-toggle="dropdown">
                                                                    Action
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li class="dropdown-item ">
                                                                        <a href="#">Action</a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Another action
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Something else here
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li class="dropdown-item">
                                                                        <a href="#">
                                                                            Separated link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-primary">
                                            <div class="card-header text-white bg-primary">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Disabled Inputs
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <input type="text" class="form-control" placeholder="Disabled input"
                                                           disabled="disabled">
                                                </form>
                                                <hr>
                                                <form class="">
                                                    <fieldset disabled="disabled">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-form-label text-lg-right text-left col-lg-3 col-12">Email</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="email" class="form-control"
                                                                       id="inputEmail3" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword4" class="col-form-label text-lg-right text-left col-lg-3 col-12">Password</label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <input type="password" class="form-control"
                                                                       id="inputPassword4" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" disabled> Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <button type="submit" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card card-info">
                                            <div class="card-header text-white bg-info">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Supported Form Controls in
                                                    Twitter Bootstrap
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form class="">

                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12"
                                                               for="inputEmail4">Email</label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="email" class="form-control" id="inputEmail4"
                                                                   placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12"
                                                               for="inputPassword5">Password</label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="password" class="form-control"
                                                                   id="inputPassword5" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12"
                                                               for="confirmPassword">
                                                            Confirm Password
                                                        </label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="password" class="form-control"
                                                                   id="confirmPassword" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12" for="firstName">
                                                            First Name
                                                        </label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="text" class="form-control" id="firstName"
                                                                   placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12" for="lastName">Last
                                                            Name
                                                        </label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="text" class="form-control" id="lastName"
                                                                   placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12"
                                                               for="phoneNumber">Phone</label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="tel" class="form-control" id="phoneNumber"
                                                                   placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12">
                                                            Date of Birth
                                                        </label>
                                                        <div class="col-sm-3 col-12 m-t-10">
                                                            <select class="form-control">
                                                                <option>Date</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                                <option>15</option>
                                                                <option>16</option>
                                                                <option>17</option>
                                                                <option>18</option>
                                                                <option>19</option>
                                                                <option>20</option>
                                                                <option>21</option>
                                                                <option>22</option>
                                                                <option>23</option>
                                                                <option>24</option>
                                                                <option>25</option>
                                                                <option>26</option>
                                                                <option>27</option>
                                                                <option>28</option>
                                                                <option>29</option>
                                                                <option>30</option>
                                                                <option>31</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-3 col-12 m-t-10">
                                                            <select class="form-control">
                                                                <option>Month</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-3 col-12 m-t-10">
                                                            <select class="form-control">
                                                                <option>Year</option>
                                                                <option>1991</option>
                                                                <option>1992</option>
                                                                <option>1993</option>
                                                                <option>1994</option>
                                                                <option>1995</option>
                                                                <option>1996</option>
                                                                <option>1997</option>
                                                                <option>1998</option>
                                                                <option>1999</option>
                                                                <option>2000</option>
                                                                <option>2001</option>
                                                                <option>2002</option>
                                                                <option>2003</option>
                                                                <option>2004</option>
                                                                <option>2005</option>
                                                                <option>2006</option>
                                                                <option>2007</option>
                                                                <option>2008</option>
                                                                <option>2009</option>
                                                                <option>2000</option>
                                                                <option>2011</option>
                                                                <option>2012</option>
                                                                <option>2013</option>
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12"
                                                               for="postalAddress">Address</label>
                                                        <div class="col-sm-9 col-12">
                                                            <textarea rows="3" class="form-control resize_vertical"
                                                                      id="postalAddress"
                                                                      placeholder="Postal Address"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12" for="ZipCode">Zip
                                                            Code
                                                        </label>
                                                        <div class="col-sm-9 col-12">
                                                            <input type="text" class="form-control" id="ZipCode"
                                                                   placeholder="Zip Code">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label text-lg-right text-left col-sm-3 col-12">Gender</label>
                                                        <div class="col-sm-9 col-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="gender-radio1">
                                                                        <input type="radio" id="gender-radio1"
                                                                               name="gender-radios1" value="option1">&nbsp;Male
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="gender-radio2">
                                                                        <input type="radio" id="gender-radio2"
                                                                               name="gender-radios1" value="option2">&nbsp;Female
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="gender-radio3">
                                                                        <input type="radio" id="gender-radio3"
                                                                               name="gender-radios1" value="option3">&nbsp;Other
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 offset-sm-3 col-lg-9 col-12 ">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" value="news">&nbsp; Send me
                                                                latest news and updates.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 offset-sm-3 col-lg-9 col-12 ">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" value="agree">&nbsp; I agree to
                                                                the
                                                                <a href="#">
                                                                    Terms and Conditions
                                                                </a> .
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="offset-lg-3 offset-sm-3 col-lg-9 col-12 ">
                                                            <input type="button" class="btn btn-primary" value="Submit">
                                                            <button type="reset" class="btn btn-default">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--select2 ends-->
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="card border-success">
                                            <div class="card-header text-white bg-success">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-check-circle-o"></i> Horizontal Form Layout
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form class="">
                                                    <div class="form-group row">
                                                        <label for="inputEmai4"
                                                               class="col-form-label text-lg-right text-left col-lg-3 col-12">Email</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="email" class="form-control" id="inputEmai4"
                                                                   placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword"
                                                               class="col-form-label text-lg-right text-left col-lg-3 col-12">Password</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="password" class="form-control"
                                                                   id="inputPassword" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 col-lg-9 col-12 ">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> Remember me
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <div class="offset-lg-3 col-lg-9 col-12 ">
                                                            <button type="button" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-warning">
                                            <div class="card-header text-white bg-warning">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-crosshairs"></i> General Controls
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" enctype="multipart/form-data"
                                                      class="">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Static</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <p class="form-control-static">
                                                                Static text
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-text-input">Text</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="text" id="example-text-input"
                                                                   name="example-text-input" class="form-control"
                                                                   placeholder="Text">
                                                            <span class="help-block">
                                                                        This is a help text
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                               for="example-email">Email</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="email" id="example-email" name="example-email"
                                                                   class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-password">Password</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="password" id="example-password"
                                                                   name="example-password" class="form-control"
                                                                   placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-disabled">Disabled</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <input type="text" id="example-disabled"
                                                                   name="example-disabled" class="form-control"
                                                                   placeholder="Disabled" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                               for="example-textarea-input">Textarea</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <textarea id="example-textarea-input"
                                                                      name="example-textarea-input" rows="7"
                                                                      class="form-control resize_vertical"
                                                                      placeholder="Description.."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-select">Select</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <select id="example-select" name="example-select"
                                                                    class="form-control" size="1">
                                                                <option value="0">
                                                                    Please select
                                                                </option>
                                                                <option value="1">Bootstrap</option>
                                                                <option value="2">CSS</option>
                                                                <option value="3">JavaScript</option>
                                                                <option value="4">HTML</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                               for="example-multiple-select">Multiple</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <select id="example-multiple-select"
                                                                    name="example-multiple-select" class="form-control"
                                                                    size="5" multiple>
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                                <option value="4">Option #4</option>
                                                                <option value="5">Option #5</option>
                                                                <option value="6">Option #6</option>
                                                                <option value="7">Option #7</option>
                                                                <option value="8">Option #8</option>
                                                                <option value="9">Option #9</option>
                                                                <option value="10">Option #10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Radio Buttons</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <div class="m-l-18">
                                                                <label for="example-radio1">
                                                                    <input type="radio" id="example-radio1"
                                                                           name="example-radios" value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="m-l-18">
                                                                <label for="example-radio2">
                                                                    <input type="radio" id="example-radio2"
                                                                           name="example-radios" value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="m-l-18">
                                                                <label for="example-radio3">
                                                                    <input type="radio" id="example-radio3"
                                                                           name="example-radios" value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                            Inline Radio Buttons
                                                        </label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <label class="radio-inline m-l-18"
                                                                   for="example-inline-radio1">
                                                                <input type="radio" id="example-inline-radio1"
                                                                       name="example-inline-radios" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                            <label class="radio-inline" for="example-inline-radio2">
                                                                <input type="radio" id="example-inline-radio2"
                                                                       name="example-inline-radios" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                            <label class="radio-inline m-l-18"
                                                                   for="example-inline-radio3">
                                                                <input type="radio" id="example-inline-radio3"
                                                                       name="example-inline-radios" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">Checkboxes</label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <div class="m-l-18">
                                                                <label for="example-checkbox1">
                                                                    <input type="checkbox" id="example-checkbox1"
                                                                           name="example-checkbox1" value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                            </div>
                                                            <div class="m-l-18">
                                                                <label for="example-checkbox2">
                                                                    <input type="checkbox" id="example-checkbox2"
                                                                           name="example-checkbox2" value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                            </div>
                                                            <div class="m-l-18">
                                                                <label for="example-checkbox3">
                                                                    <input type="checkbox" id="example-checkbox3"
                                                                           name="example-checkbox3" value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                            Inline Checkboxes
                                                        </label>
                                                        <div class="col-lg-9 col-12 ">
                                                            <label class="checkbox-inline m-l-18"
                                                                   for="example-inline-checkbox1">
                                                                <input type="checkbox" id="example-inline-checkbox1"
                                                                       name="example-inline-checkbox1" value="option1">&nbsp;
                                                                HTML
                                                            </label>
                                                            <label class="checkbox-inline m-l-18"
                                                                   for="example-inline-checkbox2">
                                                                <input type="checkbox" id="example-inline-checkbox2"
                                                                       name="example-inline-checkbox2" value="option2">&nbsp;
                                                                CSS
                                                            </label>
                                                            <label class="checkbox-inline m-l-18"
                                                                   for="example-inline-checkbox3">
                                                                <input type="checkbox" id="example-inline-checkbox3"
                                                                       name="example-inline-checkbox3" value="option3">&nbsp;
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="example-file-input">File</label>
                                                        <div class="col-lg-9 col-12  m-t-10">
                                                            <input type="file" id="example-file-input"
                                                                   name="example-file-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                               for="example-file-multiple-input">
                                                            Multiple File
                                                        </label>
                                                        <div class="col-lg-9 col-12  m-t-10">
                                                            <input type="file" id="example-file-multiple-input"
                                                                   name="example-file-multiple-input" multiple>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-actions row">
                                                        <div class="col-lg-9 col-12  offset-lg-3">
                                                            <button type="button"
                                                                    class="btn btn-effect-ripple btn-primary">Submit
                                                            </button>
                                                            <button type="reset"
                                                                    class="btn btn-effect-ripple btn-default reset_btn5">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-default inputsizing">
                                            <div class="card-header bg-default">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Height Sizing of Input
                                                    Groups
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">

                                                        <div class="col-sm-4 col-12 m-t-10">

                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <i class="fa fa-fw fa-user"
                                                                                   aria-hidden="true"></i>
                                                                    </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group input-group ">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                               <input type="checkbox">
                                                                        </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group ">
                                                                <div class="input-group-text border-right-0 rounded-0 ">
                                                                    <input type="radio">
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <i class="fa fa-fw fa-user"
                                                                                   aria-hidden="true"></i>
                                                                    </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <input type="checkbox"></span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group">
                                                                <div class="input-group-text border-right-0 rounded-0">
                                                                    <input type="radio">
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group input-group-sm">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <i class="fa fa-fw fa-user"></i>
                                                                    </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group input-group-sm">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <input type="checkbox">
                                                                        </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-12 m-t-10">
                                                            <div class="input-group input-group-sm">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                                <input type="radio">
                                                                        </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border-danger">
                                            <div class="card-header text-white bg-danger">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Twitter Bootstrap Form
                                                    Validation States
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form class="">
                                                    <div class="form-group row has-success">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="inputSuccess3">Username</label>
                                                        <div class="col-lg-9 col-12   mb-3">
                                                            <input type="text" id="inputSuccess3" class="form-control form-control-lg mb-1 border-success"
                                                                   placeholder="Input with success">
                                                            <span class="help-block">
                                                                        Username is available
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-warning">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left" for="inputWarning3">Password</label>
                                                        <div class="col-lg-9 col-12  mb-3">
                                                            <input type="password" id="inputWarning3"
                                                                   class="form-control form-control-lg mb-1 border-warning"
                                                                   placeholder="Input with warning">
                                                            <span class="help-block">
                                                                        Password strength: Weak
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-error">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left"
                                                               for="inputError3">Email</label>
                                                        <div class="col-lg-9 col-12  mb-3">
                                                            <input type="email" id="inputError3" class="form-control form-control-lg mb-1 border-danger"
                                                                   placeholder="Input with error">
                                                            <span class="help-block">
                                                                        Please enter a valid email address
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 col-lg-9 col-12  mb-1">
                                                            <button type="button" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form class="">
                                                    <div class="form-group row has-success has-feedback">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-success" for="inputSuccess">Username</label>
                                                        <div class="col-lg-9 col-12  mb-3">
                                                            <input type="text" id="inputSuccess" class="form-control form-control-lg mb-1 border-success"
                                                                   placeholder="Input with success">
                                                            <span class="fa fa-check form-control-feedback text-success"></span>
                                                            <span class="help-block">
                                                                        Username is available
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-warning has-feedback">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-warning" for="inputWarning">Password</label>
                                                        <div class="col-lg-9 col-12  mb-3">
                                                            <input type="password" id="inputWarning"
                                                                   class="form-control form-control-lg mb-1 border-warning"
                                                                   placeholder="Input with warning">
                                                            <span class="fa fa-exclamation-triangle form-control-feedback text-warning"></span>
                                                            <span class="help-block">
                                                                        Password strength: Weak
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-error has-feedback">
                                                        <label class="col-lg-3 col-12 col-form-label  text-lg-right text-left text-danger"
                                                               for="inputError">Email</label>
                                                        <div class="col-lg-9 col-12  mb-3">
                                                            <input type="email" id="inputError" class="form-control form-control-lg mb-1 border-danger"
                                                                   placeholder="Input with error">
                                                            <span class="fa fa-close form-control-feedback text-danger faclose"></span>
                                                            <span class="help-block">
                                                                        Please enter a valid email address
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-lg-3 col-lg-9 col-12  mb-3">
                                                            <button type="button" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--min length ends-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card border-info">
                                            <div class="card-header text-white bg-info">
                                                <h3 class="card-title d-inline">
                                                    <i class="fa fa-fw fa-file-text-o"></i> Bootstrap Form Inputs
                                                </h3>
                                                <span class="pull-right hidden-xs">
                                                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                            <i class="fa fa-fw fa-times removepanel"></i>
                                                        </span>
                                            </div>
                                            <div class="card-body">
                                                <form role="form" class="">
                                                    <div class="form-group  row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-email">
                                                            Email Address
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-prepend">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                            <i class="fa fa-envelope-o"></i>
                                                                        </span>
                                                                <input type="text" class="form-control" id="b-email"
                                                                       placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-password">Password</label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-prepend">
                                                                    <span class="input-group-text border-right-0 rounded-0">
                                                                            <i class="fa fa-key"></i>
                                                                        </span>
                                                                <input type="password" class="form-control"
                                                                       id="b-password"
                                                                       placeholder="Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success row">
                                                        <label for="email1" class="col-md-2 col-form-label text-lg-right text-left text-success">
                                                            Validation Email
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-icon right input-group-prepend">
                                                                    <span class="input-group-text bg-success border-right-0 rounded-0">
                                                                            <i class="fa fa-envelope-o"></i>
                                                                        </span>
                                                                <input id="email1" class="input-error form-control"
                                                                       type="text" placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-error row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left text-danger" for="b-validation">
                                                            Validation Password
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-icon right input-group-prepend">
                                                                    <span class="input-group-text border-right-0 rounded-0 bg-danger">
                                                                            <i class="fa fa-key"></i>
                                                                        </span>
                                                                <input type="password" class="input-error form-control"
                                                                       placeholder="Password" id="b-validation">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-checkboxleft">
                                                            Checkbox Left
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-prepend">
                                                                <div class="input-group-text border-right-0 rounded-0">
                                                                    <input type="checkbox">
                                                                </div>
                                                                <input type="text" class="form-control" id="b-checkboxleft">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-checkboxright">
                                                            Checkbox right
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-append">
                                                                <input type="text" class="form-control" id="b-checkboxright">
                                                                <div class="input-group-text border-left-0 rounded-0">
                                                                    <input type="checkbox">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-radioleft">
                                                            Radio on left
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-prepend">
                                                                <div class="input-group-text border-right-0 rounded-0">
                                                                    <input type="radio" id="b-radioleft">
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="b-radioright">
                                                            Radio on right
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-group-append">
                                                                <input type="text" class="form-control" id="b-radioright">
                                                                <div class="input-group-text border-left-0 rounded-0">
                                                                    <input type="radio">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="email">
                                                            Processing right
                                                        </label>
                                                        <div class=" col-md-8">
                                                            <div class="input-icon left spinner">
                                                                <input id="email" class="input-error form-control"
                                                                       type="text" placeholder=" "> <i
                                                                    class="fa fa-fw fa-spin fa-spinner proc text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left" for="staticpara">
                                                            Static Paragraph
                                                        </label>
                                                        <div class="col-md-8">
                                                            <p class="form-control" id="staticpara">
                                                                email@example.com
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label text-lg-right text-left">Readonly</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Readonly" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8 offset-sm-2">
                                                            <button type="button" class="btn btn-primary m-t-10">Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-danger m-t-10">Cancel
                                                            </button>
                                                            <button type="reset"
                                                                    class="btn btn-effect-ripple btn-default m-t-10 reset_btn6">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/form_layouts.js')}}"></script>
    <!-- end of page level js -->
@stop
