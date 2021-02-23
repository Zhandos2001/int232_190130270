<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function SName($name){
    	return view('/studentName',["name" => "Aidar"]);
    }


     public function sdata_bith($date_birth){
    	return view('/student_date_birth')-> with('date_birth',$date_birth);
    }

    public function sAge($age){
    	return view('/studentAge', compact('age'));
    }
}

