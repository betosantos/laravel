@extends('template.front.layout')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Cursos</h2>
        {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
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

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->


@endsection
