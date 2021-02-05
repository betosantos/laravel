@extends('template.admin.admin')

@section('content')

  <div class="col-md-12">
    <div class="row">
      <div class="col-md-8">
        <h1 class="h3 mb-4 text-gray-800">Categorias</h1>
      </div>

      <div class="col-md-4 text-right">
        <a href="{{ route('admin.categorias.create') }}"><button type="button" class="btn btn-success">Cadastrar</button></a>
      </div>    
    </div>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success') !!}
      </div>
    @endif
  </div>


  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th class="text-right">Ações</th>
      </tr>
    </thead>
    @forelse ($categorias as $categorias)
      <tbody>
        <tr>
          <td>{{ $categorias->nome }}</td>
          <td>{{ $categorias->descricao }}</td>
          <td class="text-right">
            <a href="{{ route('admin.categorias.show', $categorias->id) }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
            &nbsp;
            <a href="{{ route('admin.categorias.destroy', $categorias->id) }}"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
          </td>
        </tr>
      </tbody>
    @empty
      <div class="alert alert-warning text-center">
        <p><strong>Não Há Categorias Cadastradas !! </p></strong>
      </div>
    @endforelse
  </table>


@endsection
