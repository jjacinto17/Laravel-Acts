<?php

use App\Http\Controllers\SaludoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1> Hola </h1>";
});

/*Route::get('/{saludo}/{user}/{userA?}', function ($saludo, $user, $userA = null) {
    if ($saludo === "saludo") {
        if (preg_match('/^[A-Za-z]+$/', $user)) {
            if ($userA !== null) {
                return "<h1>Hola " . $user . " " . $userA . "</h1>";
            } else {
                return "<h1>Hola " . $user . "</h1>";
            }
        } else {
            return "No se permiten números en el nombre de usuario.";
        }
    }
})->where('user', '[A-Za-z]+')->where('userA', '[A-Za-z]+');*/

Route::get('{saludo}/{user}/{userA?}', [SaludoController::class, 'saludo'])->where('user', '[A-Za-z]+')->where('userA', '[A-Za-z]+');

Route::get('/{operacion}/{num1}/{num2}', function ($operacion, $num1, $num2) {
    if ($operacion === "suma") {

        return "<h1>Resultado: " . $num1 + $num2 . "</h1>";

    } elseif ($operacion === "resta") {

        return "<h1>Resultado: " . $num1 - $num2 . "</h1>";

    } elseif ($operacion === "multiplicacion") {

        return "<h1>Resultado: " . $num1 * $num2 . "</h1>";

    } elseif ($operacion === "division") {

        if ($num2 != 0) {
            return "<h1>Resultado: " . $num1 / $num2 . "</h1>";
        } else {
            return "No es posible dividir entre cero.";
        }

    } else {
        return "<h1> Operación incorrecta </h1>";
    }
});

