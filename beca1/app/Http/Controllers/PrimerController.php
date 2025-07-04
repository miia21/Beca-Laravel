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


}
