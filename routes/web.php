<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FronttendController;
use App\Http\Controllers\TaskController;

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


Route::get('/',[FronttendController::class,'index'])->name('front.home');
Route::get('/contact-us',[FronttendController::class,'contact'])->name('front.contact');
Route::get('/about-us',[FronttendController::class,'about'])->name('front.about');
Route::get('task/create',[TaskController::class,'create'])->name('task.create');


