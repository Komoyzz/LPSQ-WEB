<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/home', function () {
    return view('home');
})->name('home');


// Auth 
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('login', 'loginPost')->name('login.post');
    Route::post('logout', 'logout')->name('logout');
});


Route::get('/formexcel', function () {
    return view('formexcel');
})->name('formexcel');

Route::get('/navigationaudit', function () {
    return view('Audit.navigationaudit');
})->name('navigationaudit');

Route::get('/cargooperation', function () {
    return view('Audit.cargooperation');
})->name('cargooperation');

Route::get('/mooringoperation', function () {
    return view('Audit.mooringoperation');
})->name('mooringoperation');

Route::get('/engineeringaudit', function () {
    return view('Audit.engineeringaudit');
})->name('engineeringaudit');

Route::get('/superintendentvisit', function () {
    return view('Audit.superintendentvisit');
})->name('superintendentvisit');

Route::get('/totalaudit', function () {
    return view('Audit.totalaudit');
})->name('totalaudit');

Route::get('/circular', function () {
    return view('Audit.circular');
})->name('circular');

Route::get('/mwt', function () {
    return view('Audit.mwt');
})->name('mwt');

Route::get('/negativefeedback', function () {
    return view('Audit.negativefeedback');
})->name('negativefeedback');

Route::get('/incidentrecord', function () {
    return view('YTD.incidentrecord');
})->name('incidentrecord');

Route::get('/investigationrecord', function () {
    return view('YTD.investigationrecord');
})->name('investigationrecord');

Route::get('/bjst', function () {
    return view('YTD.bjst');
})->name('bjst');

Route::get('/psc', function () {
    return view('YTD.psc');
})->name('psc');

Route::get('/cdi', function () {
    return view('YTD.cdi');
})->name('cdi');

Route::get('/sirre', function () {
    return view('YTD.sirre');
})->name('sirre');

Route::get('/internalaudit', function () {
    return view('YTD.internalaudit');
})->name('internalaudit');

Route::get('/uauc', function () {
    return view('YTD.uauc');
})->name('uauc');

Route::get('/ohsisftmt', function () {
    return view('YTD.ohsisftmt');
})->name('ohsisftmt');

Route::get('/coc', function () {
    return view('YTD.coc');
})->name('coc');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');