<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\AuthController;
use App\http\Controllers\HomeController;

use App\Models\Auth;

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

// HOME ROUTES
Route::controller(HomeController::class)->middleware('auth')->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('explore', 'explore')->name('explore');
    Route::get('inventory', 'inventory')->name('inventory');
});


// AUTH ROUTES
Route::controller(AuthController::class)->prefix('auth')->group(function(){
    // GET METHODS
    Route::get('login', 'login')->name('login');
    Route::get('lock', 'lock')->name('lock');
    Route::get('register', 'register')->name('register');
    Route::get('reset-password', 'reset_password');
    Route::get('confirm-code', 'confirm_code');
    Route::get('logout', 'logout');
    // POST METHODS
    Route::post('login', 'do_login');
    Route::post('lock', 'do_lock');
    Route::post('register', 'do_register');
    Route::post('reset-password', 'do_reset');
    Route::post('confirm-code', 'do_confirm');
})->middleware('guest');
