<?php

use App\Http\Controllers\v1\BerandaController;
use App\Http\Controllers\v1\BeritaController;
use App\Http\Controllers\v1\PengaduanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[BerandaController::class, 'index'])->name('beranda');
Route::get('/berita',[BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/detail/{slug}',[BeritaController::class, 'detail'])->name('berita.detail');
Route::resource('pengajuan', PengaduanController::class);
Route::get('/riwayat',[BerandaController::class, 'riwayat'])->name('riwayat.index');

// Route::middleware(['auth'])->group(function () {
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
