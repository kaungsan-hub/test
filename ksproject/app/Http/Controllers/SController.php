<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SController extends Controller
{
    function test(){
        return Student::all();
    }
}
