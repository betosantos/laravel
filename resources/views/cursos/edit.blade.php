@extends('template.admin.admin')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1 class="h3 mb-4 text-gray-800">Cadastrar Cursos </h1>
    </div>
  </div>


  <div class="col-md-12">
    <form method="POST" action="{{ route('admin.cursos.update', $curso->id ) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nome">Nome do Curso</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $curso->nome }}">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição Curta</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $curso->descricao }}">
      </div>


      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Categorias</label>
            <select class="form-control" name="categorias[]" multiple style="height: 127px !important;">
              @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}"
                  @if($curso->categorias->contains($categoria)) selected @endif
                    >{{$categoria->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label for="descricao">Descrição Completa </label>
                <textarea class="form-control" id="corpo" name="corpo" rows="4">{{ $curso->corpo }}</textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{ $curso->preco }}">
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="descricao">Imagem </label><br>
                <img class="img-responsive img-rounded" src="{{ url('storage/cursos/'.$curso->imagem) }}" style="max-width: 340px;">                  
                <br/>
                <br/>
                <input id="imagem" name="imagem" type="file">
              </div>
            </div>


            <div class="col-md-8">
              <div class="form-group">
                <label for="descricao">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $curso->url }}">
              </div>
            </div>
          </div>

          <div class="mt-3">
            <button type="submit" class="btn btn-success">Atualizar</button>
          </div>

        </form>
      </div>


    @endsection
