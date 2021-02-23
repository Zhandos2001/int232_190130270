<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function operation($num1,$sign,$num2){
    	switch ($sign) {
    		case '+':
    			$result = $num1 + $num2;
    			return view('user',["result" => $result]);
    			break;
    		case '-':
    			$result = $num1 - $num2;
    			return view('user',["result" => $result]);
    			break;

    			case '*':
    			$result = $num1 * $num2;
    			return view('user',["result" => $result]);
    			break;

    			case ':':
    			$result = $num1 / $num2;
    			return view('user',["result" => $result]);
    			break;
    		
    	}
    }
    
}
