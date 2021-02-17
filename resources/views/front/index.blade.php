@extends('template.front.layout')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>PRONTOInfo </h1>
      <h2>Portal de Ensino e Consultoria em Tecnologia da Informação. </h2>
      <a href="courses.html" class="btn-get-started">Conheça</a>
    </div>
  </section><!-- End Hero -->



  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Consultoria</h2>
        {{-- <p>Tecnologia da Informação</p> --}}
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset('front/assets/img/about.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Como ajudar seu negócio.</h3>
          <p class="font-italic">
            Hoje em dia, é praticamente impossível pensar em empresas, independente do seu porte e segmento de mercado, terem sucesso em termos de vendas e administração, sem o uso da tecnologia. Mas afinal, o que ela pode fazer pelo seu empreendimento?
          </p>
          <br/>
          <ul>
            <li><i class="icofont-check-circled"></i> Em tempos de crise financeira e instabilidade no cenário político e econômico mundial, são as empresas que sabem controlar os seus custos que conseguem se manter firmes mesmo com as adversidades. </li>
            <br/>
            <li><i class="icofont-check-circled"></i> Esse setor é estratégico na gestão do seu negócio, mesmo que ainda não receba a atenção necessária de muitos administradores.</li>
          </ul>
          {{-- <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        </p> --}}
        <a href="about.html" class="learn-more-btn">Conheça</a>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Diferenciais de mercado.</h3>
          <p>
            A utilização da tecnologia da informação (T.I.) tem fundamental importância, pois possibilita o processamento de grandes quantidades de informações, e auxiliam na eficiente tomada de decisão naquele momento.
          </p>
          <div class="text-center">
            <a href="about.html" class="more-btn">Conheça <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Segurança</h4>
                <p>Mais segurança para os dados empresariais </p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Qualidade</h4>
                <p>Propondo soluções na medida certa para cada tipo de negócio </p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-images"></i>
                <h4>Produtividade</h4>
                <p>Aumento da produtividade melhor controle dos recursos </p>
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
    <div class="section-title">
      <h2> Serviços </h2>
      {{-- <p>Tecnologia da Informação</p> --}}
    </div>

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
      <h2>Tecnologia da Informação</h2>
      <p>Cursos em Destaque</p>
    </div>

    <form class="form-inline" style="margin-bottom:20px;" method="GET" action="{{ route('front.search') }}">
      <div class="input-group" style="width:100%;">
        <input type="search" class="form-control rounded" placeholder="Buscar Cursos" name="search" id="search"/>
        {{-- <button type="button" class="btn btn-outline-success">Buscar</button> --}}
        <button type="submit" class="btn btn-success">Buscar</button>
      </div>
    </form>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">  
      @foreach ($cursos as $curso)
        <div class="col-lg-4 d-flex align-items-stretch" style="margin-bottom:40px;">
          <div class="card-deck">
            <div class="card">
              <a href="{{ route('front.detalhes',$curso->id) }}">
                @if ($curso->imagem)
                  <img src="{{ url("storage/cursos/{$curso->imagem}") }}" class="img-fluid align-items-stretch" alt="">
                @else
                  <img src="{{ url("storage/cursos/nofoto.jpg") }}" class="img-fluid align-items-stretch" alt="">
                @endif
              </a>
              <div class="card-body">
                <h5 class="card-title">{{ $curso->nome }}</h5>
                <p class="card-text">{{ $curso->descricao }}</p>
                @foreach($curso->categorias as $cat)
                  <span class="badge badge-success align-left">{{ $cat->nome }}</span>
                @endforeach
              </div>

              <div class="card-footer price">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-6 float-left">
                      <p><b> Preço: </b></p>
                    </div>
                    <div class="mb-6 float-right">
                      <p><b> R$ {{ $curso->preco }} </b></p>
                    </div>
                  </div>
                </div>
              </div>
              <a href="{{ route('front.detalhes',$curso->id) }}"><button type="button" class="btn btn-success btn-block"> Detalhes</button></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="row float-right">
      <div class="col-md-12">
        <div class="todos-cursos">
          <a href="{{ route('front.curso') }}"><button type="button" class="btn btn-success"> Todos os Cursos</button></a>
        </div>
      </div>
    </div>

  </div><!-- FIM do container -->
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
