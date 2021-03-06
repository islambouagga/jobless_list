
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{mix("/css/app.css")}}>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="../../index3.html" class="navbar-brand">
                <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light"></span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: black" href="/" class="nav-link">مرحبا</a>
                    </li>
                    <li class="nav-item">
                        <router-link style="color: black"  to="/Candidate" class="nav-link black">قائمة المسجلين</router-link>
                    </li>
                    @can('isAdmin')

                    <li class="nav-item">
                        <router-link style="color: black"  to="/Volunteer" class="nav-link black">قائمة المنسقين</router-link>
                    </li>
                    @endcan
                    <li class="nav-item">
                        <a style="color: black" href="{{route('statistics')}}" class="nav-link">احصائيات</a>
                    </li>
                </ul>

            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                <li class="nav-item">
                    <a class="nav-link btn-lg"  href="{{ route('logout') }}" role="button"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off red"></i>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <router-view></router-view>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src={{mix("/js/app.js")}}></script>
</body>
</html>
