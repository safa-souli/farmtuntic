<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <title>Identification</title>
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
  <link rel="apple-touch-icon-precomposed" href="#">
  <link rel="shortcut icon" href="{{ URL::asset('assets\img\logo\Icon.png')}}" title="icon">
  <!-- Bootstrap -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="{{ asset('assets/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Flaticons -->
  <link href="{{ asset('assets/css/font/flaticon.css') }}" rel="stylesheet">
  <!-- Swiper Slider -->
  <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
  <!-- Range Slider -->
  <link href="{{ asset('assets/css/ion.rangeSlider.min.css') }}" rel="stylesheet">
  <!-- magnific popup -->
  <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
  <!-- Nice Select -->
  <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <!-- Custom Responsive -->
  <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
  <!-- place -->
  <style type="text/css">
    .shadow-box {
      box-shadow: 2px 2px 18px  hsl(0, 3%, 53%);
    }
  </style>
</head>

<body>
<div class="inner-wrapper">
  <div class="container-fluid no-padding">
    <div class="row no-gutters overflow-auto">
      <div class="col-md-6">
          <div class="main-banner">
          <img src="{{ asset('assets/img/banner/'.$bg) }}" class="img-fluid full-width main-img" alt="logo">
          <div class="overlay-2 main-padding">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo/logo2.png') }}" class="img-fluid" alt="logo">
            </a>
          </div>
          <img src="{{ asset('assets/img/banner/burger.png') }}" class="footer-img" alt="footer-img">
        </div>
      </div>
        @yield('content')
    </div>
  </div>
</div>
<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Popper -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Range Slider -->
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
<!-- Swiper Slider -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- sticky sidebar -->
<script src="{{ asset('assets/js/sticksy.js') }}"></script>
<!-- organza Js -->
<script src="{{ asset('assets/js/organza.js') }}"></script>
<!-- /Place all Scripts Here -->
</body>


</html>
