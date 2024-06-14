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
    return view('welcome'); // Menampilkan halaman welcome saat pengguna mengakses '/'
})->name('welcome');

Route::get('/main', function () {
    return view('main'); // Menampilkan halaman utama (main.blade.php) saat pengguna mengakses '/main'
})->name('page.index');

Route::get('/page', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/page/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi'])->name('home');
Route::get('/page/pelatihan', [App\Http\Controllers\PageController::class, 'pelatihan'])->name('home');
Route::get('/page/kontak', [App\Http\Controllers\PageController::class, 'kontak'])->name('home');
Route::get('/page/tentang', [App\Http\Controllers\PageController::class, 'tentang'])->name('home');

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

        Route::get('/dataPengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('dataPengguna.index')->middleware('auth');

    });
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);




