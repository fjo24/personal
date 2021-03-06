<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="{{asset('AdminLTE/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('AdminLTE/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset ('AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('AdminLTE/plugins/datepicker/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('AdminLTE/plugins/datepicker/bootstrap-datepicker.standalone.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a class="logo" href="../../index2.html">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                        <b>
                            A
                        </b>
                        LT
                    </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                        <b>
                            Admin
                        </b>
                        LTE
                    </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a class="sidebar-toggle" data-toggle="offcanvas" href="#" role="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                <span class="icon-bar">
                        </span>
                <span class="icon-bar">
                        </span>
                <span class="icon-bar">
                        </span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope-o">
                            </i>
                            <span class="label label-success">
                                        4
                                    </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                You have 4 messages
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img alt="User Image" class="img-circle"
                                                     src="../../dist/img/user2-160x160.jpg">
                                                </img>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small>
                                                    <i class="fa fa-clock-o">
                                                    </i>
                                                    5 mins
                                                </small>
                                            </h4>
                                            <p>
                                                Why not buy a new awesome theme?
                                            </p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">
                                    See All Messages
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell-o">
                            </i>
                            <span class="label label-warning">
                                        10
                                    </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                You have 10 notifications
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua">
                                            </i>
                                            5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">
                                    View all
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-flag-o">
                            </i>
                            <span class="label label-danger">
                                        9
                                    </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                You have 9 tasks
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">
                                                    20%
                                                </small>
                                            </h3>
                                            <div class="progress xs">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
                                                     class="progress-bar progress-bar-aqua" role="progressbar"
                                                     style="width: 20%">
                                                            <span class="sr-only">
                                                                20% Complete
                                                            </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">
                                    View all tasks
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img alt="User Image" class="user-image" src="../../dist/img/user2-160x160.jpg">
                            <span class="hidden-xs">
                                            Alexander Pierce
                                        </span>
                            </img>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img alt="User Image" class="img-circle" src="../../dist/img/user2-160x160.jpg">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>
                                        Member since Nov. 2012
                                    </small>
                                </p>
                                </img>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">
                                            Followers
                                        </a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">
                                            Sales
                                        </a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">
                                            Friends
                                        </a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat" href="#">
                                        Profile
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="#">
                                        Sign out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a data-toggle="control-sidebar" href="#">
                            <i class="fa fa-gears">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img alt="User Image" class="img-circle" src="../../dist/img/user2-160x160.jpg">
                    </img>
                </div>
                <div class="pull-left info">
                    <p>
                        Alexander Pierce
                    </p>
                    <a href="#">
                        <i class="fa fa-circle text-success">
                        </i>
                        Online
                    </a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" class="sidebar-form" method="get">
                <div class="input-group">
                    <input class="form-control" name="q" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                                    <button class="btn btn-flat" id="search-btn" name="search" type="submit">
                                        <i class="fa fa-search">
                                        </i>
                                    </button>
                                </span>
                    </input>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">
                    MAIN NAVIGATION
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard">
                        </i>
                        <span>
                                    Dashboard
                                </span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right">
                                    </i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="../../index.html">
                                <i class="fa fa-circle-o">
                                </i>
                                Dashboard v1
                            </a>
                        </li>
                        <li>
                            <a href="../../index2.html">
                                <i class="fa fa-circle-o">
                                </i>
                                Dashboard v2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>
                    it all starts here
                </small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard">
                        </i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Examples
                    </a>
                </li>
                <li class="active">
                    Blank page
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('contenido')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>
                Version
            </b>
            2.3.8
        </div>
        <strong>
            Copyright © 2014-2016
            <a href="http://almsaeedstudio.com">
                Almsaeed Studio
            </a>
            .
        </strong>
        All rights
        reserved.
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li>
                <a data-toggle="tab" href="#control-sidebar-home-tab">
                    <i class="fa fa-home">
                    </i>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#control-sidebar-settings-tab">
                    <i class="fa fa-gears">
                    </i>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">
                    Recent Activity
                </h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Langdon's Birthday
                                </h4>
                                <p>
                                    Will be 23 on April 24th
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Frodo Updated His Profile
                                </h4>
                                <p>
                                    New phone +1(800)555-1234
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Nora Joined Mailing List
                                </h4>
                                <p>
                                    nora@example.com
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Cron Job 254 Executed
                                </h4>
                                <p>
                                    Execution time 5 seconds
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
                <h3 class="control-sidebar-heading">
                    Tasks Progress
                </h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">
                                            70%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">
                                            95%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">
                                            50%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">
                                            68%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">
                Stats Tab Content
            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">
                        General Settings
                    </h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <h3 class="control-sidebar-heading">
                        Chat Settings
                    </h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input class="pull-right" type="checkbox">
                            </input>
                        </label>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a class="text-red pull-right" href="javascript:void(0)">
                                <i class="fa fa-trash-o">
                                </i>
                            </a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
 immediately after the control sidebar -->
    <div class="control-sidebar-bg">
    </div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="{{asset('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.es.js')}}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.phone.extensions.js') }}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/mask/jquery.mask.min.js') }}"></script>

@yield('js')
</body>
</html>