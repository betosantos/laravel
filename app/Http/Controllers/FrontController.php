<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Curso;

class FrontController extends Controller
{
  public function front()
  {
    $cursos = Curso::all();
    return view('front.index', compact('cursos'));
  }


  public function contato()
  {
    return view('front.contato');
  }


  public function sobre()
  {
    return view('front.sobre');
  }


  public function curso()
  {
    return view('front.curso');
  }


  public function detalhes($id)
  {
    $curso = Curso::find($id);
    return view('front.detalhes', compact('curso'));
  }



}
