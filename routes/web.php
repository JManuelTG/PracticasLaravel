<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actualizaciones', function ()  {
    //$ultima = "Creacion del sistema";
    //return view("paginas/actualizaciones",['ultima' => $ultima]);// ->with(['ultima' => $ultima]);
    return view("paginas/actualizaciones");
    //return view("paginas/actualizaciones",compact('versiones'));
});

Route::get('/contacto', function ()  {
    return view("paginas.contacto");
});

Route::get('/precios', function ()  {
    return view("paginas/precios");
});

Route::get('/landingpage', function() {
    return view("landingpage");
} );

Route::get('/contacto/{codigo?}', function($codigo = null){
    return view("contacto",compact('codigo'));
} );