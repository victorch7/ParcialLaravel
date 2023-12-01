<?php

namespace App\Http\Controllers\Chacon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Articulo extends Controller
{
    public function index(){
        $articulos = DB::table('articulo')
        ->join('marca','marca', '=', 'idMarca')->get();
        return view('chacon.articulos', ['arti'=>$articulos]);
    }

    // public function index(){
    //     $articulos = DB::table('articulo')
    //         ->join('marca', 'articulo.marca_id', '=', 'marca.id')
    //         ->select('articulo.*', 'marca.descripcion AS descripcion_marca')
    //         ->get();
    
    //     return view('chacon.articulos', ['arti' => $articulos]);
    // }
    
}
