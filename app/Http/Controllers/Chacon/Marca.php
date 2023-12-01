<?php

namespace App\Http\Controllers\Chacon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Marca extends Controller
{
    public function index(){
        $marcas= DB::table('marca')->get();
        return view('chacon.marcas', ['marcas' =>$marcas]);
    }
}
