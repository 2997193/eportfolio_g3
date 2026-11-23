<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::prefix('evidencias')->name('evidencias.')->group(function(){
    Route::get('/', function () { 
        return view('home', ['title' => 'Listado de evidencias', 'texto' => 'Listado de evidencias']);
        })->name('index');

        Route::get('show/{id}', function ($id) { 
        return view('home', ['title' => 'Detalle de evidencia', 'texto' => 'Evidencia ' . $id]);
        })->name('show')->whereNumber('id');

        Route::get('create', function () { 
        return view('home', ['title' => 'Crear evidencia', 'texto' => 'Nueva evidencia']);
        })->name('create');

        Route::get('edit/{id}', function ($id) { 
        return view('home', ['title' => 'Editar evidencia', 'texto' => 'Modificar evidencia ' . $id]); 
        })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', function ($id = null){
    return view('home', ['texto' => $id ? 'Perfil del usuario ' . $id : 'Mi perfil']);
 })->whereNumber('id')->name('perfil');


 Route::get('/acerca', function (){
     return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');

Route::get('/pruebas', function () {
    return view('pruebas');
});
