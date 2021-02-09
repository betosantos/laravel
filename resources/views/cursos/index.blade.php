@extends('template.admin.admin')

@section('content')

  <div class="col-md-12">
    <div class="row">
      <div class="col-md-8">
        <h1 class="h3 mb-4 text-gray-800">Cursos </h1>
      </div>

      <div class="col-md-4 text-right">
        <a href="{{ route('admin.cursos.create') }}"><button type="button" class="btn btn-success">Cadastrar</button></a>
      </div>

    </div>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success') !!}
      </div>
    @endif
  </div>

  <div class="col-md-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <th width="100">Imagem</th>
          <th>Nome</th>
          <th>Categorias</th>
          <th>Preço</th>
          <th width="100" class="text-right">Ações</th>
        </tr>
      </thead>
      @forelse($cursos as $curso)
        <tbody>
          <tr>
            <td>
              @if($curso->imagem)
                <img class="img-responsive" src="{{ url("storage/cursos/{$curso->imagem}") }}" style="max-width: 130px;">
              @else
                <img class="img-responsive" src="{{ url("storage/cursos/nofoto.jpg") }}" style="max-width: 130px;">
              @endif
            </td>
            <td><a href="{{ route('admin.cursos.edit', $curso->id) }}">{{ $curso->nome }}</a></td>
            <td>
              <ul>
                @foreach($curso->categorias as $cat)
                  <li>{{ $cat->nome }}</li>
                @endforeach
              </ul>
            </td>
            <td>{{ $curso->preco }}</td>
            <td class="text-right">
              <a href="{{ route('admin.cursos.edit', $curso->id) }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
              &nbsp;
              <a href="{{ route('admin.cursos.destroy', $curso->id) }}"><i class="fa fa-trash fa-lg" aria-hidden="true" style="color: red;"></i></a>
            </td>
          </tr>
        </tbody>
      @empty
        <div class="alert alert-warning text-center">
          <p><strong>Não Há Cursos Cadastradas !! </p></strong>
        </div>
      @endforelse
    </table>
    {{ $cursos->links() }}
  </div>


@endsection
