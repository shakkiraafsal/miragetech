<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('frontend/assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/logo.png')}}" rel="apple-touch-icon">

 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


<link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
 <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{asset('frontend/assets/img/head.png')}}"  alt="Image" class="img-fluid" ></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>

          @php
          $routeName = request()->route()->getName();
          @endphp
          
          @if($routeName == "about")
           <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li><a class="nav-link scrollto active"  href="{{route('about')}}">WHO WE ARE</a></li>
          <li><a class="nav-link scrollto" href="{{route('service')}}">OUR EXPERTISE</a></li>
          <li><a class="nav-link scrollto  " href="{{route('contact')}}">DROP US A LINE</a></li>
          
          @elseif($routeName == "service")
           <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li><a class="nav-link scrollto "  href="{{route('about')}}">WHO WE ARE</a></li>
          <li><a class="nav-link scrollto active " href="{{route('service')}}">OUR EXPERTISE</a></li>
          <li><a class="nav-link scrollto  " href="{{route('contact')}}">DROP US A LINE</a></li>

         @elseif($routeName == "contact")
           <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li><a class="nav-link scrollto "  href="{{route('about')}}">WHO WE ARE</a></li>
          <li><a class="nav-link scrollto  " href="{{route('service')}}">OUR EXPERTISE</a></li>
          <li><a class="nav-link scrollto active " href="{{route('contact')}}">DROP US A LINE</a></li>
          @else

         <li><a class="nav-link scrollto active" href="/">HOME</a></li>
          <li><a class="nav-link scrollto "  href="{{route('about')}}">WHO WE ARE</a></li>
          <li><a class="nav-link scrollto" href="{{route('service')}}">OUR EXPERTISE</a></li>
          <li><a class="nav-link scrollto  " href="{{route('contact')}}">DROP US A LINE</a></li>

          @endif
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
            @yield("maincontent")



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>MirageTech</strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by <a href="https://miragetech.in/">MirageTech</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  

</body>

</html>