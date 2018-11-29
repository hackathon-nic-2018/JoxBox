<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inicio - @yield('title','Index')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  @include('layouts.complementos.style')

  <!-- Favicons -->
  
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    @include('layouts.complementos.menu')
    <!-- header-area end -->
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div style="margin-bottom: 150px;">
    @yield('content') 
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Start Footer bottom Area -->
  @include('layouts.complementos.footer')
  @include('layouts.complementos.scrips')
  @stack('scripts')


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->

</body>

</html>
