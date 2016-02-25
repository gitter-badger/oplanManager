<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $page_title or "OplanManager" }}</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset("vendor/bootstrap4/css/bootstrap.min.css") }}"  media="screen,projection"integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous" />
  </head>
  <body>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="{{ asset ("jquery/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset ("vendor/bootstrap4/js/bootstrap.min.js") }}" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
