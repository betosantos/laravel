<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categorias';

  //public $timestamps = false;

  protected $fillable = [
    'nome',
    'descricao',
  ];


  public function cursos()
  {
    return $this->belongsToMany(Curso::class);
  }

}
