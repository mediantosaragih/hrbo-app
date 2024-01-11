<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\RosterController;

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
    return view('auth/login');
});
Route::get('/dashboardd', function () {
    return view('dashboardd');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/login/google', 'redirectToGoogle')->name('redirectToGoogle');
    Route::get('/login/google/callback', 'handleGoogleCallback')->name('handleGoogleCallback');

});

Route::middleware(['auth'])->group(function () {

    // Route::get('/employee', function () {
    //     return view('main/employee/employee');
    // })->name('employee');

    Route::get('/employee', 'App\Http\Controllers\EmployeeController@DataKaryawan')->name('employee');
    Route::post('/PostTambahDataKaryawan', 'App\Http\Controllers\EmployeeController@PostTambahDataKaryawan')->name('PostTambahDataKaryawan');
    // Route::get('/detail_data/{general_karyawan_id}', 'App\Http\Controllers\EmployeeController@DetailDataKaryawan');

    Route::get('/detail_data', function () {
        return view('main/employee/detail_data');
    })->name('detail_data');

    Route::get('/tambah_data', function () {
        return view('main/employee/tambah_data');
    })->name('tambah_data');

    // Route::get('/divisi', 'App\Http\Controllers\DivisiController@index')->name('divisi');
    // Route::post('/create', 'App\Http\Controllers\DivisiController@Create')->name('divisi.create');

    Route::get('divisi', [DivisiController::class, 'index'])->name('divisi');
    Route::get('divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('divisi', [DivisiController::class, 'store'])->name('divisi.store');
    Route::get('divisi/{id}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
    Route::put('divisi/{id}', [DivisiController::class, 'update'])->name('divisi.update');
    Route::delete('divisi/{id}', [DivisiController::class, 'destroy'])->name('divisi.destroy');

    Route::get('/sallary', 'App\Http\Controllers\SallaryController@DataSallary')->name('sallary');

    Route::get('/roster', [RosterController::class, 'index'])->name('roster');
    Route::get('/events', [RosterController::class, 'getEvents']);
    Route::delete('/roster/{id}', [RosterController::class, 'deleteEvent']);
    Route::put('/roster/{id}', [RosterController::class, 'update']);
    Route::put('/roster/{id}/resize', [RosterController::class, 'resize']);
    Route::get('/events/search', [RosterController::class, 'search']);

    Route::get('/attendance', function () {
        return view('main/attendance/attendance');
    })->name('attendence');

    Route::get('/overtime', function () {
        return view('main/overtime/overtime');
    })->name('overtime');

    Route::get('/compensation', function () {
        return view('main/compensation/compensation');
    })->name('compensation');

    Route::get('/remuneration', function () {
        return view('main/remuneration/remuneration');
    })->name('remuneration');;

    Route::get('/performance', function () {
        return view('main/performance/performance');
    })->name('performance');
});

