<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;


Route::get('/', HomeController::class);

require __DIR__ . '/evidencias.php';

Route::get('/perfil/{id?}', PerfilController::class)->name('perfil')->whereNumber('id');

 Route::get('/acerca', function (){
     return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');

Route::get('/pruebas', function () {
    return view('pruebas');
});

