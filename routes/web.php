<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About_Me', function (){
    return view('About_Me');
});

Route::get('/Hobbies', function (){
    return view('Hobbies');
});

Route::get('/Skills', function (){
    return view('Skills');
});

