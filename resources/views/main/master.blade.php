<!doctype html>
<html class="no-js" lang="zxx">
   <head>
    <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Kopdig.id-Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Platform untuk koperasi" name="description" />
    <meta content="kopdig" name="author" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-utama.png')}}">
        @include('main.head-css')
  </head>
  <body>
    @include('main.preload-css')
  @include('main.header')
    @yield('isi')

    @include('main.footer')

    @include('main.vendor-script')
    </body>
</html>
