<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Categoria;
use Illuminate\Support\Facades\Storage;

class CursosController extends Controller
{

  public function index()
  {
    $cursos = Curso::orderBy('nome','desc')->paginate(10);
    $categorias = Categoria::all();

    return view('cursos.index', compact('cursos', 'categorias'));
  }



  public function create()
  {
    $categorias = Categoria::all();
    return view('cursos.form', compact('categorias'));
  }




  public function store(Request $request)
  {
    $data = $request->all();

    if($files = $request->hasFile('imagem')) {
      $name = uniqid(date('HisYmd'));
      $extension =  $request->imagem->extension();
      $nameFile = "{$name}.{$extension}";

      $data['imagem'] = $nameFile;

      $upload = $request->file('imagem')->storeAs('cursos', $nameFile);
    }

    $curso = Curso::create($data);
    $curso->categorias()->sync($data['categorias']);

    return redirect()->route('admin.cursos.index')->with('success', 'Curso Cadastrado com Sucesso');
  }



  public function show($id)
  {
    return view('cursos.single');
  }



  public function edit($id)
  {
    $curso = Curso::find($id);
    $categorias = Categoria::all();

    return view('cursos.edit', compact('curso', 'categorias'));
  }



  public function update(Request $request, $id)
  {
    $data = $request->all();

    if($files = $request->hasFile('imagem')) {
      $name = uniqid(date('HisYmd'));
      $extension =  $request->imagem->extension();
      $nameFile = "{$name}.{$extension}";

      $data['imagem'] = $nameFile;

      $upload = $request->file('imagem')->storeAs('cursos', $nameFile);
    }
    
    $curso = Curso::find($id);
    $curso->update($data);
    $curso->categorias()->sync($data['categorias']);

    return redirect()->route('admin.cursos.index')->with('success', 'Curso Atualizado com Sucesso');
  }



  public function destroy($id)
  {
    $curso = Curso::find($id);
    $curso->delete();

    return redirect()->route('admin.cursos.index')->with('success', 'Curso Excluído com Sucesso');
  }



}
