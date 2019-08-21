<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
  <meta charset="utf-8">
  <title>Juan Eduardo Gómez</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {!!SEO::generate()!!}
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

  <header id="header" class="fixed-top">
    <div class="container">
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#why-us">Curiculum vitae</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header>
  <!-- #header -->
  <div id="app">
  <section id="intro" class="clearfix">
        <intro></intro>
  </section>  
  <!-- #intro -->
  <main id="main">   
    <section id="about">      
        <about></about>      
    </section>
    <!-- #about -->   
    <section id="services" class="section-bg">     
        <services></services>      
    </section><!-- #services -->    
    <section id="why-us" class="wow fadeIn">      
        <why-us></why-us>      
    </section>
   
    <section id="contact">
      @include('contact')
    </section><!-- #contact -->
  </main>
  </div>

  
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Carrera 28-34-29, Bucaramanga, Santader<br>
              Colombia <br>
              <strong>Telefono:</strong>+57 318-831-5485<br>
              <strong>Email:</strong>go.juangomez23@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Juan Gomez</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <script src="{{ mix('/js/app.js') }}"></script>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  {{-- <script src="contactform/contactform.js"></script> --}}
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>
