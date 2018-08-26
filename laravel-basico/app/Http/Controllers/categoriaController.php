<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use sistemaLaravel\Http\Requests\CategoriaFormRequest;
use DB;

class categoriaController extends Controller
{
    //
    public function __construct(){

    }

    public function index(Request $request){
      if($request){
        $query=trim($request->get('searchText'));
        $categorias = DB::table('categoria')->where('nome','LIKE', '%'.$query.'%')->where('condicao', '=', '1');
      }
    }
    public function create(){

    }
    public function store(){

    }
    public function show(){

    }
    public function edit(){

    }
}
