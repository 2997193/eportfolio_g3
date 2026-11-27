<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

Route::get('/', HomeController::class);

Route::prefix('evidencias')->name('evidencias.')->group(function(){
    Route::get('/', function () { 
        return view ('index');
        })->name('index');

        Route::get('show/{id}', function ($id) { 
        return view('show', ['id' => $id]);
        })->name('show')->whereNumber('id');

        Route::get('create', function () { 
        return view('create');
        })->name('create');

        Route::get('edit/{id}', function ($id) { 
        return view('edit', ['id' => $id]);
        })->name('edit')->whereNumber('id');
});


Route::get('/perfil/{id?}', PerfilController::class)->name('perfil')->whereNumber('id');

 Route::get('/acerca', function (){
     return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');

Route::get('/pruebas', function () {
    return view('pruebas');
});

require __DIR__.'/ciclos-formativos.php';