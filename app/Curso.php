<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $table = 'cursos';

  //public $timestamps = false;

  protected $fillable = [
    'nome',
    'descricao',
    'corpo',
    'imagem',
    'url',
    'preco'
  ];

  public function categorias()
  {
    return $this->belongsToMany(Categoria::class);
  }

}
