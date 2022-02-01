<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;

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

Route::get('/index', [VistasController::class, 'index'])->name('index');

Route::get('/contacto',[VistasController::class,'contacto'])->name('contacto');

Route::get('/posts',[VistasController::class,'posts'])->name('posts');

Route::get('/sobreN',[VistasController::class,'sobreN'])->name('sobreN');

