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

Route::get('/', function ($lang = 'en') {
    App::setLocale($lang);
    return view('home');
});

Route::get('/{lang}', function ($lang) {
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

Route::get('/login/{lang}', function () {
    return view('login');
})->name('login');

Route::get('/otp/{lang}', function () {
    return view('otp');
});

Route::get('/VideoConsult/{lang}', [App\Http\Controllers\VideoConsultController::class, 'getDoctors']);
Route::get('/DocConsultForm/{lang}', [\App\Http\Controllers\RequestController::class, 'appointmentForm']);


Route::post('/appointment-form', [App\Http\Controllers\RequestController::class, 'appointment'])->name('appointment.submit');
Route::post('/medical-visits', [App\Http\Controllers\RequestController::class, 'medicalVisits'])->name('medical.visits');
Route::post('/visa', [App\Http\Controllers\RequestController::class, 'visa'])->name('visa');
Route::post('/lab-test', [App\Http\Controllers\RequestController::class, 'labTest'])->name('lab.test');

Route::get('/doctor-dashboard/{lang}', function () {
    return view('doctor.dashboard');
})->middleware('auth');

Route::get('/patient-dashboard/{lang}', function () {
    return view('patient.dashboard');
});

Route::get('/patient-dashboard/{lang}', function () {
    return view('patient.dashboard');
})->name('patient.dashboard');

Route::get('/patient-appointments/{lang}', function () {
    return view('patient.appointments');
})->name('patient.appointments');

Route::get('/patient-prescription/{lang}', function () {
    return view('patient.prescription');
})->name('patient.prescription');

Route::get('/patient-medicalRecords/{lang}', function () {
    return view('patient.medicalRecords');
})->name('patient.medicalRecords');

Route::get('/patient-biling/{lang}', function () {
    return view('patient.biling');
})->name('patient.biling');

Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

// Route::get('/video-consult', [App\Http\Controllers\VideoConsultController::class, 'getDoctors']);

Route::resource('contact', ContactController::class);

// patient-login
Route::post('/patient-login', [App\Http\Controllers\UserController::class, 'patientLogin'])->name('patient.login');

// doctor-login
Route::post('/doctor-login', [App\Http\Controllers\UserController::class, 'doctorLogin'])->name('doctor.login');

Route::post('/verify-otp', [App\Http\Controllers\UserController::class, 'checkOtp'])->name('otp');
 
// Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
