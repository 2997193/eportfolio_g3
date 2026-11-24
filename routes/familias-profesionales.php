<?php

use App\Http\Controllers\FamiliaProfesionalController;
use Illuminate\Support\Facades\Route;

Route::controller(FamiliaProfesionalController::class)->group(function () {
    Route::get('/familias-profesionales', 'index')->name('familias-profesionales.index');
    Route::get('/familias-profesionales/show/{id}', 'show')->name('familias-profesionales.show');
    Route::get('/familias-profesionales/create', 'create')->name('familias-profesionales.create');
    Route::get('/familias-profesionales/edit/{id}', 'edit')->name('familias-profesionales.edit');
});
