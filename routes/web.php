<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImoveisController;
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

Route::get('/imoveis/cadastro',[ImoveisController::class, 'index'])->middleware('auth');  
  


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/cadastro-imoveis', function () {
    return view('cadastro-imoveis');
})->name('cadastro-imoveis');
