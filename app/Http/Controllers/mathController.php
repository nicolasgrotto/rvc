<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function show(string $mathOperation, $num1, $num2){
        return view('math', ['mathOperation' => $mathOperation, 'num1' => $num1, 'num2' => $num2]);
    }
}
