<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;



class PerfilController extends Controller
{
     /* el ? indica que es opcional */
    public function __invoke(?int $id = null): View
    {
        return view('perfil', ['id' => $id]);
    }
}
