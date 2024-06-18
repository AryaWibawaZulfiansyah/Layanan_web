<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\CekRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Dashboard\Admin\DataPendaftaranController;
use App\Http\Controllers\Dashboard\Admin\DataSekolahController;
use App\Http\Controllers\Dashboard\Admin\DataSiswaController;
use App\Http\Controllers\Dashboard\User\PendaftaranController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Home\BeasiswaController;
use App\Http\Controllers\Home\BeritaController;
use App\Http\Controllers\Home\BiayaController;
use App\Http\Controllers\Home\PanduanController;
use App\Http\Controllers\Home\SeleksiController;

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
    return view('home');
});

// Route::get('/daftar', [RegisteredUserController::class, 'index'])->name('daftar');

Route::get('/seleksi', [SeleksiController::class, 'index'])->name('seleksi');
Route::get('/biaya', [BiayaController::class, 'index'])->name('biaya');
Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');
Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth', 'CekRole:admin']], function () {
    route::get('dashboard/admin', [AdminAdminController::class, 'index'])->name('adminDashboard');
    route::get('dashboard/admin/data-sekolah', [DataSekolahController::class, 'index'])->name('datasekolah');
    route::get('dashboard/admin/siswa', [DataSiswaController::class, 'index'])->name('datasiswa');
    route::get('dashboard/admin/datapendaftaran', [DataPendaftaranController::class, 'index'])->name('datapendaftaran');
});

Route::group(['middleware' => ['auth', 'CekRole:user']], function () {
    route::get('/dashboard', [UserController::class, 'index'])->name('userDashboard');
    route::get('dashboard/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
});
