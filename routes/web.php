<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('home');
})->name('homepg');

Route::get('/about', function(){
    return view('about');
})->name('aboutpg');

// Route::get('/reg', function(){
//     return view('registration');
// })->name('registrationpg');

Route::get('/reg', [RegistrationController::class, 'showform'])->name('registrationpg');
Route::post('/reg', [RegistrationController::class, 'signUp'])->name('registrationpg');