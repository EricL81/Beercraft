<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweryController;

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

Route::get('/', function () {return view('welcome');})->name("home");

Route::get('/cervecerias',[BreweryController::class,'todas'])->name("cervecerias");

Route::get('/cerveceria',[BreweryController::class,'una'])->name("cerveceria");





