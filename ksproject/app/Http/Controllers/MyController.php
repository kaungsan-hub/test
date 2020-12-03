<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class MyController extends Controller
{
    function test(){
        return "This is test() method!";
    }

    function displayview(){
        return view('test2', ['n'=>'hello']);
    }

    function newstudent(){
        $s = new Student();
        $s->id=1;
        $s->sname="kaung san";
        $s->age=19;
        $s->gender="M";
        $s->mark=50;
        $s->save();

        return "Student save successfull";
    }
}
