<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon-1.webp') }}">

    <link rel="shortcut icon" href="assets/images/favicon-1.webp">
    @yield('title')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/toastr.min.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-straight/css/uicons-regular-straight.css'>


    @yield('style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="https://shadytree.pub/" class="nav-link">Website</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.logout') }}" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0E0E0E">
        <!-- Brand Logo -->
        <a href="{{ route('admin.dashboard') }}" class="brand-link text-center">
            <span class="brand-text font-weight-light"><img src="{{asset('images/logo/header-logo-two.png')}}" alt="Tools Baay Logo" width="100px"/></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                            <i class="fi fi-rr-dashboard"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{ route('category.list') }}" class="nav-link {{ request()->is('category*') ? 'active' : '' }}">
                                    <!-- <i class="nav-icon fas fa-layer-group"></i> -->
                                    <i class="fi fi-rs-category"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('product.list') }}" class="nav-link {{ request()->is('product*') ? 'active' : '' }}">
                            <!-- <i class="nav-icon fas fa-yin-yang"></i> -->
                            <i class="fi fi-rr-box-open"></i>
                            
                            <p>
                                Product
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('gallery.admin.list') }}" class="nav-link {{ request()->is('gallery*') ? 'active' : '' }}">
                    <i class="fi fi-rr-layout-fluid"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') == '2024' ? 2024 : 2024 - date('Y') }} <a href="https://bmgroupinc.com">BM_IT</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

</div>


<script src="{{ asset('js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-ui.min.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('js/admin/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/Chart.min.js') }}"></script>
<script src="{{ asset('js/admin/sparkline.js') }}"></script>
<script src="{{ asset('js/admin/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('js/admin/jquery.knob.min.js') }}"></script>
<script src="{{ asset('js/admin/moment.min.js') }}"></script>
<script src="{{ asset('js/admin/daterangepicker.js') }}"></script>
<script src="{{ asset('js/admin/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('js/admin/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('js/admin/adminlte.js') }}"></script>
<script src="{{ asset('js/admin/demo.js') }}"></script>
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
<script src="{{ asset('js/admin/toastr.min.js') }}"></script>
<script src="{{ asset('js/admin/emailValidation.js') }}"></script>


@yield('script')

</body>
</html>
