<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutMeController;
use App\http\Controllers\HobbiesController;
use App\http\Controllers\SkillsController;

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

Route::get('/About_Me', [AboutMeController::class, 'index'])->name('About_Me');
Route::get('/Hobbies', [HobbiesController::class, 'index'])->name('Hobbies');
Route::get('/Skills', [SkillsController::class, 'index'])->name('Skills');
