<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'IDO | Admin') }} | Admin</title>

    <!-- Bootstrap -->
    <link href="{{asset('gadmin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gadmin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('gadmin/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset('gadmin/build/css/custom.min.css')}}" rel="stylesheet">
    @yield('styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('backoffice.layouts.menu')
        @include('backoffice.layouts.header')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @yield('contenido')
          </div>
        </div>
        <!-- /page content -->
        @include('backoffice.layouts.footer')
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('gadmin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('gadmin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('gadmin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('gadmin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{asset('gadmin/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('gadmin/vendors/google-code-prettify/src/prettify.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('gadmin/build/js/custom.min.js')}}"></script>
    <script>
          $(document).ready(function(e){
            NProgress.done();
        });
    </script>

  </body>
</html>