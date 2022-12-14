<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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




Route::get('/contact',[ContactController::class,'form']);

Route::post('/confirm',[ContactController::class,'confirm']);

Route::post('/create',[ContactController::class,'create']);

Route::get('/complete',[ContactController::class,'complete']);

Route::get('/',[ContactController::class,'index']);

Route::post('/search',[ContactController::class,'search']);

Route::post('/delete',[ContactController::class,'delete']);
