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

// Route::get('/',function($lang = 'en'){
//     App::setLocale($lang);
//     return view('home');
// });

Route::get('/{lang}',function($lang){
    App::setLocale($lang);

    return view('home');
});

Route::get('/medical-visits', function () {
    return view('medical_visits');
});

Route::resource('contact', ContactController::class);
 
// Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
