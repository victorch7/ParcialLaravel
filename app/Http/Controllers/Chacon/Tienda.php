<?php

namespace App\Http\Controllers\Chacon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tienda extends Controller
{
    public function index(){
        return view('chacon.presentacion');
    }
}
