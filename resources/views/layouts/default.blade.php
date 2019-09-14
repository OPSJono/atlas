<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | Core + Admin Template
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <!-- global css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@yield('header_styles')
<!-- end of global css -->
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-expand-md navbar-static-top">
        <a href="/" class="logo navbar-brand">
            <!-- Add the class icon to your logo image or logo icon to add the margin -->
            <img src="{{asset('assets/img/atlas/logo_64x64.png')}}" height="36" alt="logo"/> <span class="logo-title">Atlas</span>
        </a>

        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
<div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw fa-bars"></i>
            </a>
</div>


            <div class="navbar-collapse " id="navbarNav">
                <div class="navbar-right ml-auto">
            <ul class="nav navbar-nav ">
                <li class="nav-item dropdown messages-menu">
                    <a href="#" class="nav-link dropdown-toggle"> <i
                                class="fa fa-fw fa-envelope-o black"></i>
                        <span class="label bg-success">2</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">New Messages</li>
                        <li class="msg-set message striped-col">
                            <a href="" class="">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br>
                                    Can we Meet?
                                    <br>
                                    <small>Just Now</small>
                                    <span class="label bg-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li class="msg-set message">
                            <a href="" class="">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body"><strong>John</strong>
                                    <br>
                                    Dont forgot to call...
                                    <br>
                                    <small>5 minutes ago</small>
                                    <span class="label bg-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li class="msg-set message striped-col">
                            <a href="" class="">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body">
                                    <strong>Wilton Zeph</strong>
                                    <br>
                                    If there is anything else &hellip;
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>

                            </a>
                        </li>
                        <li class="msg-set message">
                            <a href="" class="">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="msg-set message striped-col">
                            <a href="" class="">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#">View All messages</a></li>
                    </ul>

                </li>
                <!--tasks-->
                <li class="nav-item dropdown tasks-menu d-none d-sm-block">
                    <a href="#" class=" nav-link dropdown-toggle">
                        <i class="fa fa-fw fa-edit black"></i>
                        <span class="label bg-primary">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title ">You Have 4 Tasks</li>
                        <li class="message striped-col">
                            <a href="" class=" ">
                                Design some buttons
                                <small class="pull-right">20%</small>
                                <div class="message-body">
                                    <div class="progress progress-xs progress_task">
                                        <div class="progress-bar bg-primary" style="width: 20%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="" class="">
                                Create a nice theme
                                <small class="pull-right">40%</small>
                                <div class="message-body">
                                    <div class="progress progress-xs progress_task">
                                        <div class="progress-bar bg-success" style="width: 40%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message striped-col">
                            <a href="" class="">
                                Some task I need to do
                                <small class="pull-right">60%</small>
                                <div class="message-body">
                                    <div class="progress progress-xs progress_task">
                                        <div class="progress-bar bg-danger" style="width: 60%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="" class="">
                                Make beautiful transitions
                                <small class="pull-right">80%</small>
                                <div class="message-body">
                                    <div class="progress progress-xs progress_task">
                                        <div class="progress-bar bg-warning" style="width: 80%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#"> View All Tasks</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown_message">
                    <a href="#" class="nav-link dropdown-toggle toggle-right">
                        <i class="fa fa-fw fa-comments-o black"></i>
                        <span class="label bg-danger">9</span>
                    </a>
                </li>
                <!-- Notifications: style can be found in dropdown-->
                <li class="nav-item dropdown notifications-menu">
                    <a href="#" class="nav-link dropdown-toggle" >
                        <i class="fa fa-fw fa-bell-o black"></i>
                        <span class="label bg-warning">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">You have 8 notifications</li>

                        <li class="message striped-col">
                            <a href="" class=" icon-not">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body">
                                    <strong>John Doe</strong>
                                    <br>
                                    5 members joined today
                                    <br>
                                    <span class="noti-date">Just now</span>
                                </div>

                            </a>
                        </li>
                        <li class="message">
                            <a href="" class=" icon-not">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br>
                                    likes a photo of you
                                    <br>
                                    <span class="noti-date">5 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="message striped-col">
                            <a href="" class=" icon-not">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body">
                                    <strong>John</strong>
                                    <br>
                                    Dont forgot to call...
                                    <br>
                                    <span class="noti-date">11 min</span>

                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="" class=" icon-not">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>
                                    Very long description here...
                                    <br>
                                    <span class="noti-date">1 Hour</span>
                                </div>
                            </a>
                        </li>
                        <li class="message striped-col">
                            <a href="" class=" icon-not ">
                                <img class="message-image rounded-circle" src="http://i.pravatar.cc/300"
                                     alt="avatar-image">

                                <div class="message-body">
                                    <strong>Ernest Kerry</strong>
                                    <br>
                                    2 members joined today
                                    <br>
                                    <span class="noti-date">3 Days</span>

                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#"> View All Notifications</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link dropdown-toggle padding-user pt-3">
                        <img src="http://i.pravatar.cc/300" width="35"
                             class="rounded-circle img-fluid pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                {{ Auth::user()->display_name }}
                                <span><i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="http://i.pravatar.cc/300" class="rounded-circle" alt="User Image">
                            <p>{{ Auth::user()->display_name }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3 nav-item" ><a href="{{ URL :: to('user_profile') }}" class="nav-link"> <i class="fa fa-fw fa-user"></i> My
                                Profile </a>
                        </li>
                        <li role="presentation "></li>
                        <li class="nav-item"><a href="{{ URL :: to('edit_user') }}" class="nav-link"> <span><i class="fa fa-fw fa-gear"></i> Account Settings</span>
                            </a></li>
                        <li role="presentation" class="dropdown-divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('auth.login.lock') }} ">
                                    <i class="fa fa-fw fa-lock"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('auth.logout') }} ">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
                </div>
        </div>
    </nav>
</header>
<!-- For horizontal menu -->
@yield('horizontal_header')
<!-- horizontal menu ends -->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        @include('layouts/parts/navigation')
    </aside>
    <aside class="right-side">
        <!-- Content -->
        @yield('content')
        @include('layouts/parts/simpleModal')
    </aside>
    <!-- page wrapper-->
</div>
<!-- wrapper-->
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/simpleModal.js')}}" type="text/javascript"></script>
<!-- end of global js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>

</html>
