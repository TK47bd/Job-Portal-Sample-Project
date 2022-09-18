<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

////////////////////////
Route::get('/react', function () {
    return view('react');
});

Route::get('/react-data', [LoginController::class, 'React_test']);
////////////////////////


Route::get('/', function () {
    return view('index');
})->middleware('isLoggedin')->name('Home');

Route::prefix('User')->group(function () {

    Route::get('/login', function() {
        return view('User.login');
    })->middleware('isLoggedin')->name('User-login');

    Route::get('/registration', function() {
        return view('User.registration');
    })->middleware('isLoggedin')->name('User-reg');

    Route::get('/registration/complete', function() {
        return view('User.nextReg');
    })->middleware('isLoggedin')->name('User-reg-complete');

    Route::post('/registration', [LoginController::class, 'User_register'])->middleware('isLoggedin')->name('User-register');
    Route::post('/login', [LoginController::class, 'User_access'])->middleware('isLoggedin')->name('User-login-check');

});

Route::prefix('Client')->group(function () {

    Route::get('/login', function() {
        return view('Client.login');
    })->middleware('isLoggedin')->name('Client-login');

    Route::get('/registration', function() {
        return view('Client.registration');
    })->middleware('isLoggedin')->name('Client-reg');

    Route::post('/registration', [LoginController::class, 'Client_register'])->middleware('isLoggedin')->name('Client-register');
    Route::post('/login', [LoginController::class, 'Client_access'])->middleware('isLoggedin')->name('Client-login-check');

});

Route::any('/dashboard', [DashboardController::class, 'viewDashboard'])->name('Dashboard');
Route::any('/logout', [LoginController::class, 'Logout'])->name('Logout');
