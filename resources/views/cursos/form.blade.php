@extends('template.admin.admin')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1 class="h3 mb-4 text-gray-800">Cadastrar Cursos </h1>
    </div>
  </div>


  <div class="col-md-12">
    <form method="POST" action="{{ route('admin.cursos.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="nome">Nome do Curso</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>

      <div class="form-group">
        <label>Categorias</label>
        <select class="form-control" name="categorias[]" multiple>
          @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
          @endforeach
        </select>
      </div>


      <div class="form-group">
        <label for="descricao">Descrição Curta</label>
        <input type="text" class="form-control" id="descricao" name="descricao">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição Completa </label>
        <textarea class="form-control" id="corpo" name="corpo"></textarea>
      </div>

      <div class="form-group">
        <label for="preco">Preço </label>
        <input type="text" class="form-control" id="preco" name="preco">
      </div>


      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="descricao">Imagem </label><br>
            <input type="file" id="imagem" name="imagem">
          </div>
        </div>

        <div class="col-md-8">
          <div class="form-group">
            <label for="descricao">URL</label>
            <input type="text" class="form-control" id="url" name="url">
          </div>
        </div>
      </div>

      <div class="mt-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>

    </form>
  </div>


@endsection
