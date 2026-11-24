<?php

namespace App\Http\Controllers;

class PerfilController
{
    public function __invoke($id = null)
    {
        if ($id === null) {
            return 'Mi perfil';
        }

        return "Perfil del usuario {$id}";
    }
}
