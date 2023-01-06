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

Route::get('/',function($lang = 'en'){
    App::setLocale($lang);
    return view('home');
});

Route::get('/{lang}',function($lang){
    App::setLocale($lang);

    return view('home');
});

Route::get('/medical-visits/{lang}', function () {
    return view('medical_visits');
});

Route::get('/visa/{lang}', function () {
    return view('visa');
});
Route::get('/labtestResult/{lang}', function () {
    return view('labtestResult');
});
Route::get('/labtestForm/{lang}', function () {
    return view('labtestForm');
});
Route::get('/VideoConsult/{lang}', function () {
    return view('VideoConsult');
});
Route::get('/DocConsultForm/{lang}', function () {
    return view('DocConsultForm');
});

Route::post('/medical-visits', [App\Http\Controllers\RequestController::class, 'medicalVisits'])->name('medical.visits');
Route::post('/visa', [App\Http\Controllers\RequestController::class, 'visa'])->name('visa');
Route::post('/lab-test', [App\Http\Controllers\RequestController::class, 'labTest'])->name('lab.test');

Route::resource('contact', ContactController::class);
 
// Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
