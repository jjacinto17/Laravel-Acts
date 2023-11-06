<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo($saludo, $user, $userA = null)
    {
        if ($saludo === "saludo") {
            if ($userA !== null) {
                $mensaje = "Hola " . $user . " " . $userA;
            } else {
                $mensaje = "Hola " . $user;
            }
            return view('saludo', ['mensaje' => $mensaje]);
        }
    }

}
