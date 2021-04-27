<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- master -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ReviBook!</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
      <!-- for content -->
      <link rel="stylesheet" href="{{url('/content/css/hero-slider.css')}}">
      <link rel="stylesheet" href="{{url('/content/css/owl-carousel.css')}}">
      <link rel="stylesheet" href="{{url('/content/css/datepicker.css')}}">
      <link rel="stylesheet" href="{{url('/content/css/templatemo-style.css')}}">
       @stack('header-script')


   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- end loader -->
      <!-- header -->
      @include('partials.navbar')

      <!-- revolution slider -->
      @yield('banner')
      <!-- end revolution slider -->
      <!-- section -->
      @yield('content')
      <!-- end section -->
      <!-- footer -->
      @include('partials.footer')
      <!-- end footer -->
      <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
      <!-- Javascript files-->
      <script src="{{url('js/jquery.min.js')}}"></script>
      <script src="{{url('js/popper.min.js')}}"></script>
      <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('js/plugin.js')}}"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('js/custom.js')}}"></script>

      @stack('script')
      @include('sweetalert::alert')
   </body>
</html>
