<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calcular($num1, $ope, $num2){
        switch ($ope){
            case 'sumar':
                $res = $num1 + $num2;
                $sim = '+';
                break;
            case 'restar':
                $res = $num1 - $num2;
                $sim = '-';
                break;
            case 'multiplicar':
                $res = $num1 * $num2;
                $sim = '*';
                break;
            case 'dividir':
                if ($num2==0){
                    $res = 'error';
                    $sim = '/';
                }else{
                    $res = $num1 / $num2;
                    $sim = '/';
                }
                break;
            default:
                $res = 'operacion no valida';
                $sim = '?';
        }

        $datos = [
            'resultado' => $res,
            'numero1' => $num1,
            'numero2' => $num2,
            'simbolo' => $sim,
            'operacion' => $ope
        ];
        
        return view('template', $datos);
    }
}