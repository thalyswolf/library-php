<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use sistemaLaravel\Categoria;
use Illuminate\Support\Facedes\Redirect;
use sistemaLaravel\Http\Requests\CategoriaFormRequest;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
