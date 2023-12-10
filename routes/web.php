<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\resultCareController;
use App\Http\Controllers\santriCareController;

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



Route::get('/', [homeController::class, 'index'])->name('home.index');


Route::controller(authController::class)->prefix('auth')->name('auth.')->group(function () {
    Route::view('/login','login')->name('login');
    // Route::view('/login', 'login')->name('login');
    Route::post('/login-process', 'authenticate')->name('login.process');
});

Route::middleware('auth')->group(function () {
    Route::resource('home', homeController::class);

    Route::get('santri/select-data', [santriCareController::class, 'select2'])->name('santri.select2');
    Route::get('santri/select-data/select-obat', [santriCareController::class, 'selectObat'])->name('santri.selectObat');
    Route::resource('santri', santriCareController::class);
    Route::resource('result', resultCareController::class);

 
    
});