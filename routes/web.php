<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TraitmentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [TraitmentController::class, 'go'])->name('/');

Route::get('/login', [TraitmentController::class, 'connect'])->name('login');
   
Route::get('/registration', [TraitmentController::class, 'register'])->name('registration');

Route::get('/logout', [TraitmentController::class, 'connector'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
