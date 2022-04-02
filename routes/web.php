<?php

use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;
use App\Models\Lugares;
use App\Http\Controllers\CatfacsController;
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
Route::get('/',[VistasController::class,'index'])->name('index');
Route::get('/Vista1',[CatfacsController::class,'Vista1'])->name('Vista1');

