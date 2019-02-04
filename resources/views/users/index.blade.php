@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Users List
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
   <!--end of page level css-->
    <style>
        .table tr th
        {
            border-top:0;
        }
        table.dataTable
        {
            border-collapse: collapse !important;
        }

    </style>
@stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Users List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Users</a>
                </li>
                <li class="breadcrumb-item active">
                    Users List
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15">
            <div class="row">
                <div class="col-12">
                <div class="card border-primary ">
                    <div class="card-header text-white  bg-primary">
                        <h4 class="card-title d-inline">
                            <i class="fa fa-fw fa-users"></i> Users List
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-responisve-lg table-responsive-xl">
                            <table class="table table-bordered js-datatables" id="table" data-url="{{ route('user.list') }}" data-responsive="true" data-processing="true" data-server-side="true" data-method="GET">
                                <thead>
                                    <tr class="search">
                                        <th data-searchable="true" data-orderable="true" data-column="forename">First Name</th>
                                        <th data-searchable="true" data-orderable="true" data-column="surname">Last Name</th>
                                        <th data-searchable="true" data-orderable="true" data-column="email">E-mail</th>
                                        <th data-searchable="false" data-orderable="true" data-column="created_at">Created At</th>
                                        <th data-searchable="false" data-orderable="false" data-column="id">Actions</th>
                                    </tr>
                                    <tr class="headers">
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="Heading"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title custom_align" id="Heading">Delete User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="fa fa-exclamation-triangle"></span> Are you sure you want to
                                    delete this Account?
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <a href="deleted_users " class="btn btn-danger">
                                    <span class="fa fa-check"></span> Yes
                                </a>
                                <button type="button" class="btn btn-success" data-dismiss="modal">
                                    <span class="fa fa-close"></span> No
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- row-->
            @include('layouts.right_sidebar')
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/users_custom.js')}}"></script>
<!-- end of page level js -->
@stop