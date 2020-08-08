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

Route::get('/itc91',function(){
    return view('hola');
});

Route::get('vista', function () {

    $datos=array(
        'curso1' => 'Javascript',
        'curso2' => 'Java',
        'curso3' => 'PHP'
    );
    return view('vista')->with('datos',$datos);
});
