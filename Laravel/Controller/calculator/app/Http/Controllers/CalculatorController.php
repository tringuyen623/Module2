<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function operation(Request $request){
        $op1 = (int)$request->op1;
        $op2 = (int)$request->op2;
    
        switch($request->operation){
        case 'plus':
            $result = $op1 + $op2;
            break;
        case 'minus':
            $result = $op1 - $op2;
            break;
        case 'multiply':
            $result = $op1 * $op2;
            break;
        case 'divide':
            if($op2 == 0){
                $result = 'Cannot divide by zero';
                break;
            }else {
            $result = $op1 / $op2;
            break;
            }
        }

        return view('calculator', compact('result'));
    }
}
