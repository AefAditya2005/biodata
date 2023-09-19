<?php

use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesertadidikPDF;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\PesertadidikR;
use App\Http\Controllers\StafR;
use App\Http\Controllers\UserC;

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


// Route::get('/staf', function () {
//     return view('staf');
// });


//route CRUD
Route::get('pesertadidik/pdf', [PesertadidikR::class, 'pdf'])->middleware('auth') ;
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
Route::resource('staf',StafR::class)->middleware('auth');
Route::resource('guru',GuruR::class)->middleware('auth');


// register
Route::get('register', [UserC::class, 'register'])->name('register');
Route::post('register', [UserC::class, 'register_action'])->name('register.action');

// login
Route::get('login', [UserC::class, 'login'])->name('login');
Route::post('login', [UserC::class, 'login_action'])->name('login.action');

// logout
Route::get('logout', [UserC::class, 'logout'])->name('logout');
