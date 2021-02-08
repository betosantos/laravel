@extends('template.front.layout')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Tecnologia da Informação </h1>
      <h2>Consultoria especializada em tecnologia da Informação</h2>
      <a href="courses.html" class="btn-get-started">Conheça</a>
    </div>
  </section><!-- End Hero -->



  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tecnologia da Informação</h2>
        {{-- <p>Tecnologia da Informação</p> --}}
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset('front/assets/img/about.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Como pode ajudar seu negócio.</h3>
          <p class="font-italic">
            A nova economia mundial, baseada na Tecnologia de Informação, requer das organizações um conhecimento para coletar, trabalhar, interpretar e gerenciar este recurso.
          </p>
          <br/>
          <ul>
            <li><i class="icofont-check-circled"></i> O desenvolvimento e o domínio destas habilidades serão fundamentais para as organizações buscarem uma posição melhor no mercado em relação aos seus concorrentes, sendo necessário um engajamento na constante busca por inovação..</li>
            <br/>
            <li><i class="icofont-check-circled"></i> Em contrapartida, as organizações que resistirem à economia da informação serão facilmente vencidas pela concorrência..</li>
          </ul>
          {{-- <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        </p> --}}
        <a href="about.html" class="learn-more-btn">Conheça</a>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">1232</span>
        <p>Students</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">64</span>
        <p>Courses</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">42</span>
        <p>Events</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">15</span>
        <p>Trainers</p>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Diferenciais de mercado.</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
          </p>
          <div class="text-center">
            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Satisfação</h4>
                <p>Manter os clientes satisfeitos com excelência no trabalho e atendimento </p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Qualidade</h4>
                <p>Propondo soluções na medida certa de acordo com as necessidades </p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-images"></i>
                <h4>Respeito</h4>
                <p>Cada cleinte é único com tratamento exclusivo </p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Redes</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Internet</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Servidores</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href="">Backup de Dados</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3><a href="">Banco de Dados</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Comércio Eletrônico</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Desenvolvimento de Sites</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Segurança da Informação</a></h3>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Cursos de Tecnologia da Informação</h2>
      <p>Cursos em Destaque</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      @foreach($cursos as $curso)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{ url("storage/cursos/{$curso->imagem}") }}" class="img-fluid" alt="">

            <div class="course-content">
              <h3><a href="course-details.html">Website Design</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>

              <ul>
                @foreach($curso->categorias as $cat)
                  <li>{{ $cat->nome }}</li>
                @endforeach
              </ul>
            </div>
            <div class="card-body text-right price">
              <b> R$ {{ $curso->preco }} </b>
            </div>
          </div>
        </div> <!-- End Course Item-->
      @endforeach
    </div><!-- Fim da Primeira Linha Row -->


  </div>
</section><!-- End Popular Courses Section -->

<!-- ======= Trainers Section ======= -->
{{-- <section id="trainers" class="trainers">
<div class="container" data-aos="fade-up">
<div class="section-title">
<h2>Trainers</h2>
<p>Our Professional Trainers</p>
</div>
<div class="row" data-aos="zoom-in" data-aos-delay="100">
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
<div class="member">
<img src="{{ asset('front/assets/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
<div class="member-content">
<h4>Walter White</h4>
<span>Web Development</span>
<p>
Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
</p>
<div class="social">
<a href=""><i class="icofont-twitter"></i></a>
<a href=""><i class="icofont-facebook"></i></a>
<a href=""><i class="icofont-instagram"></i></a>
<a href=""><i class="icofont-linkedin"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
<div class="member">
<img src="{{ asset('front/assets/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
<div class="member-content">
<h4>Sarah Jhinson</h4>
<span>Marketing</span>
<p>
Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
</p>
<div class="social">
<a href=""><i class="icofont-twitter"></i></a>
<a href=""><i class="icofont-facebook"></i></a>
<a href=""><i class="icofont-instagram"></i></a>
<a href=""><i class="icofont-linkedin"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
<div class="member">
<img src="{{ asset('front/assets/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
<div class="member-content">
<h4>William Anderson</h4>
<span>Content</span>
<p>
Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
</p>
<div class="social">
<a href=""><i class="icofont-twitter"></i></a>
<a href=""><i class="icofont-facebook"></i></a>
<a href=""><i class="icofont-instagram"></i></a>
<a href=""><i class="icofont-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> --}}

@endsection
