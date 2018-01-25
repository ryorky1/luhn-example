<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rhino\Luhn\Luhn as Luhn;

class LuhnController extends Controller
{
    public function showValidity(Request $request){
        $inputValue = $request->input('number');
        $luhn = new Luhn($inputValue);
        $luhnResult = $luhn->validLuhn();
        $validitymsg = $luhnResult ? "$inputValue is valid." : "$inputValue is not valid.";
        return view('index', compact('validitymsg'));

    }
}
