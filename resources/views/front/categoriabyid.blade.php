@extends('template.front.layout')

@section('content')
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Cursos da Categoria <b>{{ $categoria->nome }} </b></h2>
        {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">


        <div class="row row-cols-1 row-cols-md-3" data-aos="zoom-in" data-aos-delay="100">
          @foreach($categoria->cursos as $catcurso)
            <div class="col mb-4 align-items-stretch">
              <div class="course-content card">
                <a href="{{ route('front.detalhes',$catcurso->id) }}">
                  <img src="{{ url("storage/cursos/{$catcurso->imagem}") }}" class="img-fluid" alt="">
                </a>

                <div class="card-body">
                  <h3 style="color:black !important;">{{ $catcurso->nome }}</h3>
                  <p class="card-text">{{ $catcurso->descricao }}</p>
                  @foreach($catcurso->categorias as $cat)
                    <span class="badge badge-success align-left">{{ $cat->nome }}</span>
                  @endforeach
                  <div class="row price card-footer" style="margin-top:20px;">
                    <div class="col-md-6 text-left">
                      Preço
                    </div>
                    <div class="col-md-6 pull-right">
                      R$ {{ $catcurso->preco }}
                    </div>
                  </div>
                  <a href="{{ route('front.detalhes',$catcurso->id) }}"><button type="button" class="btn btn-success btn-block" style="margin-top:10px;">Detalhes</button></a>
                </div>

              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

@endsection
