<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FotodepilacionController;
use App\Http\Controllers\FototerapiaController;
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

Route::get('/contactos', [ContactController::class, 'index']);
Route::get('/servicios-1', [fotodepilacionController::class, 'index']);
Route::get('/servicios-2', [fototerapiaController::class, 'index']);
