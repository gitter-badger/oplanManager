<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "OplanManager" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("twitter/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset("font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset("ionicons/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("adminlte/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminlte/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />

</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      @include('partials.headers.admin')

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      @include('partials.sidebars.admin')

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      @yield('content')


      @include('partials.footers.admin')

      <!-- Control Sidebar -->


      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <script src="{{ asset ("jquery/jquery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("twitter/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("adminlte/js/app.min.js") }}" type="text/javascript"></script>
    <!-- slimScroll -->
    <script src="{{ asset ("adminlte/plugins/slimScroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset ("adminlte/plugins/fastclick/fastclick.min.js") }}" type="text/javascript"></script>
  </body>
</html>
