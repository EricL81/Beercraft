<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BreweryController;
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

// globales
Route::get('/',[FrontController::class,'index'])->name("home");

// breweries
Route::get('/cervecerias',[BreweryController::class,'all'])->name("cervecerias");
Route::get('/cerveza',[BreweryController::class,'beer'])->name("cerveza");
Route::get('/cervecerias/{id}',[BreweryController::class,'one'])->where("id","[0-9]+")->name("cerveceria");
Route::post('/cervecerias',[BreweryController::class,'create'])->name("cervecerias.create");
Route::put('/cervecerias/{id}',[BreweryController::class,'update'])->name("cervecerias.update");
Route::delete('/cervecerias/{id}',[BreweryController::class,'delete'])->name("cervecerias.delete");

// contacts

Route::post('/contacts',[ContactController::class,'contact'])->name("contact");







