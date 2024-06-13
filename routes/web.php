<?php

use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    Route::group(['middleware' => ['role:admin|mahasiswa']], function () {
        Route::get('/pelatihan', [App\Http\Controllers\PelatihanController::class, 'index'])->name('pelatihan.index');
        Route::get('/pelatihan/create', [App\Http\Controllers\PelatihanController::class, 'create'])->name('pelatihan.create');
        Route::post('/pelatihan', [App\Http\Controllers\PelatihanController::class, 'store'])->name('pelatihan.store');
        Route::get('/pelatihan/{id}', [App\Http\Controllers\PelatihanController::class, 'show'])->name('pelatihan.show');
        Route::get('/pelatihan/{id}/edit', [App\Http\Controllers\PelatihanController::class, 'edit'])->name('pelatihan.edit');
        Route::delete('/pelatihan/{id}/', [App\Http\Controllers\PelatihanController::class, 'destroy'])->name('pelatihan.destroy');
        Route::patch('/pelatihan/{id}/', [App\Http\Controllers\PelatihanController::class, 'update'])->name('pelatihan.update');
        // Route::delete('/pelatihan/{id}/', [App\Http\Controllers\PelatihanController::class, 'destroy'])->name('internships.destroy');

        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
        Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

    });
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);




