@extends('template.front.layout')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Curso {{ $curso->nome }} </h2>
        {{-- <p>Cursos online e atualizados na área de tecnologia da informação.  </p> --}}
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-7">
            @if ($curso->imagem)
              <img src="{{ url("storage/cursos/{$curso->imagem}") }}" class="img-fluid align-items-stretch" alt="">
            @else
              <img src="{{ url("storage/cursos/nofoto.jpg") }}" class="img-fluid align-items-stretch" alt="" width="500" height="300">
            @endif
            <h3>{{ $curso->nome }}</h3>
            <p>
              {{ $curso->corpo }}
            </p>
          </div>

          <div class="col-lg-5">
            <div class="" style="margin-bottom:20px;">
              <p>{{ $curso->descricao }}</p>
            </div>

            <div class="" style="margin-bottom:20px;">
              <p><b>Categorias:</b></p>
              @foreach($curso->categorias as $cat)
                <span class="badge badge-success align-left">{{ $cat->nome }}</span>
              @endforeach
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Download</h5>
              <p><a href="#">{{ $curso->url }}</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Preço</h5>
              <p>R$ {{ $curso->preco }}</p>
            </div>

            <br />
            <button type="button" class="btn btn-success btn-lg btn-block">Comprar</button>
            {{-- <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Available Seats</h5>
            <p>30</p>
          </div> --}}

        </div>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">


    </div>
  </section><!-- End Cource Details Tabs Section -->

</main><!-- End #main -->



@endsection
