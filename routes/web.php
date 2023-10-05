<?php

use App\Http\Controllers\AccPemohonController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DahboardController;
use App\Http\Controllers\DataKelengkapanController;
use App\Http\Controllers\DataPemohon;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PemohonMonitoringController;
use App\Http\Controllers\PenggunaSesiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePenggunaController;
use App\Http\Controllers\ProfileValidation;
use App\Http\Controllers\ProfileValidationController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPeusahaanController;
use App\Http\Controllers\VerifikasiController;
use App\Models\Laporan;
use App\Models\Pemohon;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['guest'])->group(function () {


    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
    Route::get('/register', [PenggunaSesiController::class, 'register']);
    Route::post('/create', [PenggunaSesiController::class, 'create']);
});

Route::get('/home', function () {
    return redirect('/home');
});
Route::middleware(['auth'])->group(function () {
});
// Route::get('/tampilan', [Dashboard::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/pengguna', [HomeController::class, 'pengguna'])->middleware('userAkses:pengguna');
Route::get('/home/pengawas', [HomeController::class, 'pengawas'])->middleware('userAkses:pengawas');
Route::get('/home/pegawai', [HomeController::class, 'pegawai'])->middleware('userAkses:pegawai');
Route::get('/registrasi', [SesiController::class, 'register_pegawai']);
Route::post('/home/create', [SesiController::class, 'create']);
Route::get('/logout', [SesiController::class, 'logout']);
//profile
Route::resource('profile', ProfileController::class)->only('index', 'update');
Route::get('profilep', [ProfilePenggunaController::class, 'index']);
Route::post('profilep', [ProfilePenggunaController::class, 'updateProfile']);
Route::resource('user', UserController::class);
Route::resource('userp', UserPeusahaanController::class);
Route::get('userk', [UserPeusahaanController::class, 'indexk']);
Route::get('userki', [UserController::class, 'indexk']);
Route::get('userkil', [LaporanController::class, 'indexk']);
//pemohon
Route::get('pemohon', [PemohonController::class, 'index']);
Route::get('status', [PemohonController::class, 'indexs']);
Route::post('pemohon', [PemohonController::class, 'create']);
Route::resource('statusr', PemohonController::class);
Route::resource('apemohon', AccPemohonController::class);
Route::resource('apemohondel', AccPemohonController::class);
Route::get('/apemohonm', [AccPemohonController::class, 'menunggu']);
Route::get('/apemohons', [AccPemohonController::class, 'diterima']);
Route::get('/apemohont', [AccPemohonController::class, 'ditolak']);
Route::get('/pemohon/detail/{id}', [PemohonController::class, 'detail'])->name('pemohon.detail');
//Laporan
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporans/{id}', [LaporanController::class, 'detail'])->name('laporan.detail');
Route::get('/laporanl', [LaporanController::class, 'indexl'])->name('laporan.indexl');
Route::get('/laporanl/{id}/edit', [LaporanController::class, 'editlLaporan'])->name('laporan.editl');
Route::put('/laporanl/{id}', [LaporanController::class, 'updatel'])->name('laporanl.update');
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
Route::delete('/laporanl/{id}', [LaporanController::class, 'destroyl'])->name('laporan.destroyl');
//dashboard
Route::get('/home/ketua', [DahboardController::class, 'index']);
Route::get('/home/pegawai', [DahboardController::class, 'indexp']);
Route::get('/home/pengawas', [DahboardController::class, 'indexs']);
//Data kelengkapan
Route::get('/data-kelengkapan/create', [DataKelengkapanController::class, 'create'])
    ->name('data-kelengkapan.create');
Route::post('/data-kelengkapan', [DataKelengkapanController::class, 'store'])
    ->name('data-kelengkapan.store');
Route::get('/data-kelengkapan/show', [DataKelengkapanController::class, 'show'])->name('data-kelengkapan.show');
Route::get('/data-kelengkapan/details/{id}', [DataKelengkapanController::class, 'details'])->name('data-kelengkapan.details');
Route::get('/halaman_error', function () {
    // Isi halaman error di sini
    return view('pengguna.master_data.pemohon.kelengkapan.index');
})->name('halaman_error');
Route::get('/data-kelengkapan/{id}', [DataKelengkapanController::class, 'detail'])->name('data-kelengkapan.detail');
//fasilitas
Route::get('/anggota/fasilitas', [FasilitasController::class, 'create']);
Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::put('/fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::get('/anggota/fasilitas/show', [FasilitasController::class, 'index']);
Route::get('/halaman_error1', function () {
    // Isi halaman error di sini
    return view('pengguna.master_data.pemohon.fasilitas.index');
})->name('halaman_error1');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');
Route::get('/fasilitasi/{id}', [FasilitasController::class, 'showi'])->name('fasilitas.showi');
Route::put('/fasiltasi/{id}', [FasilitasController::class, 'updates'])->name('fasilitasi.update');
Route::get('/terima', [AccPemohonController::class, 'indexs']);
//comment
Route::get('/comment/create/{id}', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
//cetak
Route::get('/laporans/cetak/{id}', [LaporanController::class, 'cetakDetail'])->name('laporancetak.detail');
