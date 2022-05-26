<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\SiswaController;


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

Route::get('/', function () {
    return view('welcome');
});

// Pekerja
Route::get('/pekerja', [PekerjaController::class, 'index'])->name('pekerja');

Route::get('/tambahpekerja', [PekerjaController::class, 'tambahpekerja'])->name('tambahpekerja');

Route::post('/insertdatapekerja', [PekerjaController::class, 'insertdatapekerja'])->name('insertdatapekerja');

Route::get('/tampilkandatapekerja/{id}', [PekerjaController::class, 'tampilkandatapekerja'])->name('tampilkandatapekerja');

Route::post('/updatedatapekerja/{id}', [PekerjaController::class, 'updatedatapekerja'])->name('updatedatapekerja');

Route::get('/deletedatapekerja/{id}', [PekerjaController::class, 'deletedatapekerja'])->name('deletedatapekerja');

// Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdatasiswa', [SiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa');

Route::get('/tampilkandatasiswa/{id}', [SiswaController::class, 'tampilkandatasiswa'])->name('tampilkandatasiswa');
Route::post('/updatedatasiswa/{id}', [SiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa');

Route::get('/deletedatasiswa/{id}', [SiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa');
