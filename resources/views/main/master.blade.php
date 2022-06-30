<!doctype html>
<html class="no-js" lang="zxx">
   <head>
    <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Kopdig.id-Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Platform untuk koperasi" name="description" />
    <meta content="kopdig" name="author" />
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
