@extends('template.admin.admin')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1 class="h3 mb-4 text-gray-800">Cadastrar Categorias</h1>
    </div>
  </div>


  <div class="col-md-12">
    <form method="POST" action="{{ route('admin.categorias.store') }}">
      @csrf
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao">
      </div>

      <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
  </div>


@endsection
