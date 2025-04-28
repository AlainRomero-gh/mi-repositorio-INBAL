<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index() {
       return view ('calculadora');
    }

    public function calcular (Request $request) {

       $expresion = $request -> input('expresion');

       if (!pregg_match('/^[0-9+\-*/().]+$/', $expresion)) {
        return response()->json(['resultado' => 'ERROR']);
       }

       try {
        $resultado = eval("return $expresion;");
       }
       catch (\Exception $e) {
        $resultado = "ERROR";
       }

       return response()->json(['resultado' => $resultado]);
    }
}
