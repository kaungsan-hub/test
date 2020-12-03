<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/test/{n}', function ($n) {
    return "<u>testing......$n</u>";
});

Route::get('/testview/{n}', function($n){
    return view('testview', compact('n'));
});

Route::get('/test2/{n}', function($n){
    return view('test2', ["n"=>$n]);
});

Route::get('/test3/{x}', function($n){
    return view('test3')->with(["ks"=>$n]);
});

Route::get('/test4/{x}/{y}', function($x, $y){
    return view('test4', ["p"=>$x, "q"=>$y]);
});

Route::get('/test5', 'App\Http\Controllers\MyController@test');
Route::get('/test6', 'App\Http\Controllers\MyController@displayview');

Route::get ('/newstudent', 'App\Http\Controllers\MyController@newstudent');

Route::get('/stud', 'App\Http\Controllers\SController@test');