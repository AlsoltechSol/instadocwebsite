<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/medical-visits', function () {
    return view('medical_visits');
});

Route::get('/labtest', function () {
    return view('labtest');
});
Route::get('/visa', function () {
    return view('visa');
});
Route::get('/labtestResult', function () {
    return view('labtestResult');
});
Route::get('/labtestForm', function () {
    return view('labtestForm');
});
Route::get('/VideoConsult', function () {
    return view('VideoConsult');
});

Route::resource('contact', ContactController::class);
 
// Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
