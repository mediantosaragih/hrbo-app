<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DivisiControllers;
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

    Route::post('/tambah_data/import_excel', 'App\Http\Controllers\EmployeeController@DataKaryawanImportExcel');

    Route::get('/detail_data/{general_karyawan_id}', 'App\Http\Controllers\EmployeeController@DetailDataKaryawan');
    Route::post('/PostEditDataKaryawan', 'App\Http\Controllers\EmployeeController@PostEditDataKaryawan')->name('PostEditDataKaryawan');
    Route::get('/hapus_data_karyawan/{general_karyawan_id}', 'App\Http\Controllers\EmployeeController@HapusDataKaryawan');

    Route::get('/detail_data', function () {
        return view('main/employee/detail_data');
    })->name('detail_data');

    Route::get('/tambah_data', function () {
        return view('main/employee/tambah_data');
    })->name('tambah_data');

    // Route::get('/divisi', 'App\Http\Controllers\DivisiController@index')->name('divisi');
    // Route::post('/create', 'App\Http\Controllers\DivisiController@Create')->name('divisi.create');

    Route::get('divisi', [DivisiControllers::class, 'index'])->name('divisi');
    Route::post('divisi/tambah_divisi', [DivisiControllers::class, 'tambahDivisi'])->name('PosttambahDivisi');
    Route::get('/divisi/tambah_divisi', function () {
        return view('main/divisi/create');
    })->name('tambahDivisi');
    // Route::post('/divisi/tambah_divisi', 'App\Http\Controllers\DivisiControllers@tambahDivisi')->name('PosttambahDivisi');
    Route::post('divisi', [DivisiControllers::class, 'store'])->name('divisi.store');
    Route::get('/detail/{name_divisi}', [DivisiControllers::class, 'edit'])->name('divisi.edit');
    Route::put('divisi/{id}', [DivisiControllers::class, 'update'])->name('divisi.update');
    Route::delete('divisi/{id}', [DivisiControllers::class, 'destroy'])->name('divisi.destroy');

    Route::get('/sallary', 'App\Http\Controllers\SallaryController@DataSallary')->name('sallary');

    Route::get('/roster', [RosterController::class, 'index'])->name('roster');
    Route::get('/events', [RosterController::class, 'getEvents']);
    Route::delete('/roster/{id}', [RosterController::class, 'deleteEvent']);
    Route::put('/roster/{id}', [RosterController::class, 'update']);
    Route::put('/roster/{id}/resize', [RosterController::class, 'resize']);
    Route::get('/events/search', [RosterController::class, 'search']);

    Route::get('/kehadiran_hari_ini', function () {
        return view('main/attendance/kehadiran_hari_ini');
    })->name('kehadiran_hari_ini');
    Route::get('/kehadiran', function () {
        return view('main/attendance/kehadiran');
    })->name('kehadiran');
    Route::get('/cuti_izin', function () {
        return view('main/attendance/cuti_izin');
    })->name('cuti_izin');

    Route::get('/jumlah_harga_lembur', function () {
        return view('main/overtime/jumlah_harga_lembur');
    })->name('jumlah_harga_lembur');
    Route::get('/data_lembur', function () {
        return view('main/overtime/data_lembur');
    })->name('data_lembur');

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

