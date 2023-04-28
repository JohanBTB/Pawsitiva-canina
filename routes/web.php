<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuscarController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\SobreNosotrosController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/buscar', [BuscarController::class, 'index']);
Route::get('/contactanos', [ContactanosController::class, 'index']);
Route::get('/donar', [DonarController::class, 'index']);
Route::get('/registrar', [RegistrarController::class, 'index']);
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index']);