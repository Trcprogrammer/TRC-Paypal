<?php

use App\Http\Controllers\SistemasController;
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


Route::get('/',[SistemasController::class,'index'])->name('sistemas.home');
Route::get('/create',[SistemasController::class,'create'])->name('sistemas.create');
Route::post('/store',[SistemasController::class,'store'])->name('sistemas.store');


