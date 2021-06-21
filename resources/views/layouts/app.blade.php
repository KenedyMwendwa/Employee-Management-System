<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css')}}">
  {{-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 {{-- 1 .Top Menu --}}
@include('layouts.topMenu')
 {{-- 2. left Menu --}}
@include('layouts.leftMenu')
 {{-- 3. Main Content(body) --}}

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <section class="content">
        @yield('content')
      </section>
  </div>
  <!-- /.content-wrapper -->

  {{-- 4. Right Menu --}}
@include('layouts.rightMenu')
  {{-- 5. Footer --}}
@include('layouts.footerMenu')

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
