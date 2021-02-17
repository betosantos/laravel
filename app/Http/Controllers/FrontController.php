<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Curso;
use Auth;

class FrontController extends Controller
{
  public function front()
  {
    $cursos = Curso::paginate(6);
    return view('front.index', compact('cursos'));
  }


  public function search(Request $request)
  {
    $search = $request->input('search');
    $categorias = Categoria::all();

    $cursos = Curso::where('nome','LIKE',"%{$search}%")->get();

    return view('front.search', compact('categorias','search','cursos'));
  }



  public function contato()
  {
    return view('front.contato');
  }



  public function sobre()
  {
    return view('front.sobre');
  }


  public function curso(Request $request)
  {
    $search = $request->input('search');
    $cursos = Curso::all();
    $categorias = Categoria::all();
    $curso = Curso::query()
    ->where('nome', 'LIKE', "% {$search} %")
    ->get();

    return view('front.curso', compact('cursos','categorias','categorias','curso'));
  }


  public function logout()
  {
    Auth::logout();
    return redirect()->route('front');
  }


  public function categoria($id)
  {
    $categoria = Categoria::find($id);
    $cursos = Curso::all();
    $curso = Curso::all();
    return view('front.categoriabyid', compact('cursos','categoria','curso'));
  }


  public function detalhes($id)
  {
    $curso = Curso::find($id);
    return view('front.detalhes', compact('curso'));
  }

}
