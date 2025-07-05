<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});

// Crear una ruta nueva
// Mostrar un mensaje personalizado

Route::get('/mensaje', function(){
    return '¡Hola, Laravel!';
});

// Crear controlador
// Devolver informacion a diferentes vistas

Route::get('/controlador1', [PrimerController::class, 'inicio']);

Route::get('/controlador2', [PrimerController::class, 'info']);

// * Ejercicio 1: Crear calculadora simple 
// Crear CalculadoraController 
// Método que reciba dos números y una operación 
// Vista que muestre el resultado 
// Ruta: /calcular/{num1}/{operacion}/{num2}

Route::get('/calcular/{num1?}/{operacion?}/{num2?}', [CalculadoraController::class, 'calcular']);

// * Ejercicio 2: Lista de productos 
// Crear array de productos en controlador 
// Vista que muestre productos en tabla 
// Usar directivas Blade (@foreach, @if)

Route::get('/productos', [PrimerController::class, 'listar']);

?>