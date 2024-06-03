<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('images')}}/logobalibul.png" type="image/png">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/default.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/LineIcons.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/glightbox.min.css">

  </head>
  <body>
  	
  @include('layouts.landingPage.partial.header')

  @yield('content')                  

  @include('layouts.landingPage.partial.footer')

  </body>
 
  <script src="{{asset('frontend')}}/js/vendor/jquery-3.5.1.min.js"></script>
  <script src="{{asset('frontend')}}/js/vendor/modernizr-3.7.1.min.js"></script>

  <script src="{{asset('frontend')}}/js/boostrap.js"></script>
  <script src="{{asset('frontend')}}/js/jquery.easing.min.js"></script>
  <script src="{{asset('frontend')}}/js/main.js"></script>
  <script src="{{asset('frontend')}}/js/popper.min.js"></script>
  <script src="{{asset('frontend')}}/js/scrolling-nav.js"></script>
  <script src="{{asset('frontend')}}/js/slick.min.js"></script>
  <script src="{{asset('frontend')}}/js/wow.min.js"></script>
  <script src="{{asset('frontend')}}/js/glightbox.min.js"></script>

  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
        
</html>
