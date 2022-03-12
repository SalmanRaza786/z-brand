<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>HRMS</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/admin/assets/img/logo/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('public/admin/assets/css/accounts-style.csss')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/font-awesome.min.css')}}">
        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/line-awesome.min.css')}}">

        <!-- Datatable CSS -->
        <!-- <link rel="stylesheet" href="{{asset('public/admin/assets/css/dataTables.bootstrap4.min.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">



        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/select2.min.css')}}">
        <!-- Datetimepicker CSS -->

        <link rel="stylesheet" href="{{asset('public/admin/assets/css/bootstrap-datetimepicker.min.css')}}">
        <!-- Chart CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/plugins/morris/morris.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/assets/css/table-style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/ratings/rating.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/css/toastr.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{asset('public/admin/assets/select/bootstrap-select.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="{{asset('public/admin/assets/js/html5shiv.min.js')}}"></script>
      <script src="{{asset('public/admin/assets/js/respond.min.js')}}"></script>
      <![endif]-->
</head>

<body>
        <div class="main-wrapper">
                @yield('content')
                @include('admin.admin-setup.header')
                @include('admin.admin-setup.sidebar')

                <!-- jQuery -->



                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
                <script src="{{asset('public/admin/assets/js/toastr.min.js')}}"></script>
                <!-- Task JS -->
                <script src="{{asset('public/admin/assets/js/task.js')}}"></script>
                <script type="text/javascript" src="{{asset('public/admin/assets/js/custom-js/validations.js')}}"></script>
                <!--
         <script src="{{asset('public/admin/assets/js/jquery-3.5.1.min.js')}}"></script>
         -->
                <!-- Bootstrap Core JS -->
                <script src="{{asset('public/admin/assets/js/popper.min.js')}}"></script>
                <script src="{{asset('public/admin/assets/js/bootstrap.min.js')}}"></script>
                <!-- Slimscroll JS -->
                <script src="{{asset('public/admin/assets/js/jquery.slimscroll.min.js')}}"></script>
                <!-- Select2 JS -->
                <script src="{{asset('public/admin/assets/js/select2.min.js')}}"></script>
                <!-- Datetimepicker JS -->
                <script src="{{asset('public/admin/assets/js/moment.min.js')}}"></script>

                <script src="{{asset('public/admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

                <!-- Datatable JS -->
                <!-- <script src="{{asset('public/admin/assets//js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('public/admin/assets//js/dataTables.bootstrap4.min.js')}}"></script> -->
                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>



                <!-- Chart JS -->
                <script src="{{asset('public/admin/assets/plugins/morris/morris.min.js')}}"></script>
                <script src="{{asset('public/admin/assets/plugins/raphael/raphael.min.js')}}"></script>
                <script src="{{asset('public/admin/assets/js/chart.js')}}"></script>

                <!-- Chart JS -->
                <script src="{{asset('public/admin/assets/js/Chart.min.js')}}"></script>
                <script src="{{asset('public/admin/assets/js/line-chart.js')}}"></script>
                <!-- Custom JS -->
                <script src="{{asset('public/admin/assets/js/app.js')}}"></script>
                <script src="{{asset('public/admin/assets/js/jQuery.print.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('public/admin/assets//ratings/rating.js')}}"></script>

        </div>
</body>

</html>
