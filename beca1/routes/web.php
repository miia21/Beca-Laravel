<?php

use App\Http\Controllers\PrimerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/controlador2', [PrimerController::class, '']);

// Route::get('/controlador3', [PrimerController::class, '']);

// Tarea 🤓

// * Ejercicio 1: Crear calculadora simple 
// Crear CalculadoraController 
// Método que reciba dos números y una operación 
// Vista que muestre el resultado 
// Ruta: /calcular/{num1}/{operacion}/{num2}

// * Ejercicio 2: Lista de productos 
// Crear array de productos en controlador 
// Vista que muestre productos en tabla 
// Usar directivas Blade (@foreach, @if)

?>