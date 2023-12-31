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

Route::get('/waiting-list', [HomeController::class,'fetchData'])->name('index');
Route::get('/waiting-list/form', [HomeController::class,'send_form'])->name('send_form');
Route::post('/waiting-list/send_form', [HomeController::class,'send_form_post'])->name('send_form_post');
Route::get('/waiting-list/resend_request', [HomeController::class,'resend_request'])->name('resend_request');
