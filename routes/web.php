<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('who-we-are',[Controller::class,'about'])->name('about');
Route::get('our-expertise',[Controller::class,'service'])->name('service');
Route::get('team',[Controller::class,'team'])->name('team');
Route::get('drop-us-a-line',[Controller::class,'contact'])->name('contact');
Route::post('store-contact',[ContactController::class,'storeContact'])->name('store-contact');