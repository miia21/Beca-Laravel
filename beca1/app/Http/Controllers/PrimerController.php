<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function inicio(){
        return view ('mensaje', ['nom' => 'Alejo']);
    }

    public function info(){
        $datos = [
            'nom' => 'Mia',
            'edad' => '21',
            'local' => 'Pocito'
        ];
        return view ('mensaje', $datos);
    }

    public function listar(){
        $productos = [
            (object) ['nombre' => 'leche', 'precio' => '1500', 'categoria' => 'lacteo'],
            (object) ['nombre' => 'pan', 'precio' => '800', 'categoria' => 'panificado'],
            (object) ['nombre' => 'coca cola', 'precio' => '2000', 'categoria' => 'gaseosa'],
            (object) ['nombre' => 'yerba', 'precio' => '3500', 'categoria' => 'infusion']
        ];

        $datos = [
            'productos' => $productos
        ];

        return view ('template', $datos);
    }
}
