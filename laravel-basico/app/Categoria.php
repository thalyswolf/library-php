<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primary_key = 'idcategoria';

    public $timestamps = false;
    protected $fillable = [
      'nome',
      'descricao',
      'condicao'
    ];

    protected $guarded[];
}
