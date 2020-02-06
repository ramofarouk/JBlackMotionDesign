<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JBlackMotionDesign | @yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Quickdev">
  <link href="{{ asset('Frontend/img/logo.png')}}" rel="shortcut icon">
  <link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/css/navbar.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/css/stylesheet.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/css/responsive.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/css/animate.min.css')}}">
  <script src="{{ asset('Frontend/js/modernizr-custom.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('Frontend/css/slick.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
 integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
 crossorigin=""/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css" />
</head>
<body>
  <!-- LOADER -->
  <div id="loader-wrapper">
    <div id="loader"></div>
  </div>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <a href="#0" class="cd-top">Haut</a>
  <script src="{{ asset('Frontend/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/loader.js')}}"></script>
  <script src="{{ asset('Frontend/js/top.js')}}"></script>
  <script src="{{ asset('Frontend/js/jquery.isotope.pkgd.js')}}"></script>
  <script src="{{ asset('Frontend/js/filter.js')}}"></script>
  <script src="{{ asset('Frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/magnific.popup.gallery.js')}}"></script>
  <script src="{{ asset('Frontend/js/counter.js')}}"></script>
  <script src="{{ asset('Frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/jquery.counterup.js')}}"></script>
  <script src="{{ asset('Frontend/js/flickity.pkgd.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/testimonials.js')}}"></script>
  <script src="{{ asset('Frontend/js/slick.min.js')}}"></script>
  <script src="{{ asset('Frontend/js/team.slider.js')}}"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
     integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
     crossorigin=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.6/fuse.min.js"></script>
  @yield('scripts')
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','js/analytics.js','ga');
  ga('create', 'UA-101241150-1', 'auto');
  ga('send', 'pageview');
  </script>

</body>

</html>
