<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'fetchData'])->name('index');
Route::get('waitingList', [HomeController::class,'send_form'])->name('send_form');
Route::post('send_form', [HomeController::class,'send_form_post'])->name('send_form_post');
