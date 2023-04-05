<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\DataAkunController;
use App\Http\Controllers\JualbeliController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DataHutangController;
use App\Http\Controllers\BarangorangController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\ProfilBumdesController;
use App\Http\Controllers\ProfilPengelolaController;

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

Route::get('/profilPengelola',  [ProfilPengelolaController::class, 'index'])->name('profilpengelola')->middleware('auth');
Route::post('/profilPengelola/update',  [ProfilPengelolaController::class, 'update'])->name('updateprofilpengelola')->middleware('auth');
Route::post('/profilPengelola/UpdateProfil',  [ProfilPengelolaController::class, 'updateGambar'])->name('updateGambarProfil')->middleware('auth');

// Route::get('/Profil',  [ProfilController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['prefix' => 'Master Data', 'middleware' => ['auth','Role:Ketua,Bendahara'] ],function () {
    Route::get('/Data Akun',  [DataAkunController::class, 'index'])->name('dataakun');
});

Route::get('/', function () { return redirect()->route('login'); });
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dashboard', function () {
    return view('fitur.dashboard');
})->name('dashboard');

Route::resource('/bumdes', BumdesController::class)->only(['index', 'update']);
Route::resource('/usaha', UsahaController::class)->except(['index', 'create', 'edit']);
Route::resource('/pengelola', PengelolaController::class)->except(['create', 'edit']);
Route::resource('/hutang', HutangController::class);
Route::resource('/pemasok', PemasokController::class)->except(['create', 'edit']);
Route::resource('/pelanggan', PelangganController::class)->except(['create', 'show', 'edit']);
Route::resource('/barang', BarangController::class)->except(['create', 'edit']);
Route::resource('/barangorang', BarangorangController::class)->only(['store', 'update', 'destroy']);
Route::resource('/jualbeli', JualbeliController::class)->only(['store', 'update', 'destroy']);
Route::resource('/transaksi', TransaksiController::class)->except(['create', 'edit']);

// Route::group(['middleware' => ['auth']], function () {
// });