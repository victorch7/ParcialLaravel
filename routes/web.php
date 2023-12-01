<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chacon\Articulo;
use App\Http\Controllers\Chacon\Marca;
use App\Http\Controllers\Chacon\Tienda;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/chacon/articulos', [Articulo::class, 'index']);

Route::get('/chacon/marcas', [Marca::class, 'index']);

Route::get('/chacon/presentacion', [Tienda::class, 'index']);


