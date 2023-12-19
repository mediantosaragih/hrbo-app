<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/roster', function () {
    return view('roster');
});

Route::get('/attendance', function () {
    return view('attendance');
});

Route::get('/overtime', function () {
    return view('overtime');
});

Route::get('/compensation', function () {
    return view('compensation');
});

Route::get('/remuneration', function () {
    return view('remuneration');
});

Route::get('/performance', function () {
    return view('performance');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
