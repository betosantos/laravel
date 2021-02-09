<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('front') }}">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('front') }}">Home</a></li>
          {{-- <li><a href="{{ route('front.curso') }}">Cursos</a></li> --}}
          <li class="drop-down"><a href="{{ route('front.curso') }}">Cursos</a>
            <ul>
              @foreach($categorias as $categoria)
                <li><a href="{{ route('front.categoria',$categoria->id) }}">{{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{ route('front.sobre') }}">Sobre</a></li>
          <li><a href="{{ route('front.contato') }}">Contato</a></li>
        </ul>
      </nav><!-- .nav-menu -->


      <a href="courses.html" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('content')
  </main>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Celular:</strong> (11) 9 9610-8766<br>
              <strong>Email:</strong> oliveira.roberto@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('front') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('front.sobre') }}">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('front.curso') }}">Cursos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('front.contato') }}">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Assine gratuitamente a Newsletter</h4>
            <p>Informe seu e-mail para receber novidades e informações gratuitamente.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Receba">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }} "></script>

</body>
</html>
