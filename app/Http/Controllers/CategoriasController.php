<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{

  public function index()
  {
    $categorias = Categoria::orderBy('nome','ASC')->get();

    return view('categorias.index', compact('categorias'));
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('categorias.form');
  }



  public function store(Request $request)
  {
    $data = $request->all();

    Categoria::create($data);

    //return redirect()->route('admin.categorias.index');
    return redirect()->route('admin.categorias.index')->with('success', 'Categoria Cadastrada com Sucesso');
  }



  public function show($id)
  {
    $categoria = Categoria::find($id);
    return view('categorias.edit', compact('categoria'));
  }


  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $categoria = Categoria::find($id);

    return view('categorias.edit', compact('categoria', compact('categoria')));
  }



  public function update(Request $request, $id)
  {
    $data = $request->all();

    $categoria = Categoria::find($id);
    $categoria->update($data);

    //return $categoria;
    return redirect()->route('admin.categorias.index');
  }



  public function destroy($id)
  {
    $categoria = Categoria::find($id);
    $categoria->delete();

    return redirect()->route('admin.categorias.index')->with('success', 'Categoria Removida com Sucesso');
  }


}
