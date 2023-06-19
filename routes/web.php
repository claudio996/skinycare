<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TratamientosController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Psr7\Request;


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
Route::get('/tratamientos-fotodepilacion', [TratamientosController::class, 'Fotodepilacion']);
Route::get('/tratamientos-fototerapia', [TratamientosController::class, 'Fototerapia']);
Route::post('/GetHora', [TratamientosController::class,'getHora' ]);