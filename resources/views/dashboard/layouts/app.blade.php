<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- shortcut icon-->
      <link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
      <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
      <!-- Fonts css  -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{ asset('assets/css/vendor/font-awesome.css') }}" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{ asset('assets/css/vendor/simplebar.css') }}" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{ asset('assets/css/vendor/bootstrap.css') }}" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
      @stack('css')
    </head>
  <body>
      <!-- Loader Start-->
      <!-- Loader End-->
      <!-- Header Start-->
      @include('dashboard.layouts.navbar')
  
      <!-- Header End-->
      <!-- sidebar start-->
      @include('dashboard.layouts.sidebar')
      <!-- sidebar end-->
    <div class="themebody-wrap">    
      <!-- breadcrumb start-->
      @yield('breadcrumb')
      <!-- breadcrumb end-->
      <!-- theme body start-->
      @yield('content')
      <!-- theme body end-->
    </div>
    <!-- footer start-->
      <footer class="codex-footer">
        <p>Copyright 2024 © Rohi All rights reserved.</p>
      </footer>
    <!-- footer end-->
    <!-- back to top start //-->
      <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
    <!-- back to top end //-->
      <!-- main jquery-->
      <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
      <!-- Config -->
      <script src="{{ asset('assets/js/layout-config.js') }}"></script>
      <!-- Customizer-->
      <script src="{{ asset('assets/js/customizer.js') }}"></script>
      <!-- Feather icons js-->
      <script src="{{ asset('assets/js/icons/feather-icon/feather.js') }}"></script>
      <!-- Bootstrap js-->
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Scrollbar-->
      <script src="{{ asset('assets/js/vendors/simplebar.js') }}"></script>
      <!-- apex chart-->
      <script src="{{ asset('assets/js/vendors/chart/apexcharts.js') }}"></script>
      <!-- dashboard-->
      <script src="{{ asset('assets/js/dashboard/dashboard.js') }}"></script>
      <!-- Custom script-->
      <script src="{{ asset('assets/js/custom-script.js') }}"></script>
      @stack('js')
  </body>
</html>