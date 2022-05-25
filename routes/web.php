<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;

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

Route::get('/pekerja',[PekerjaController::class, 'index'])->name('pekerja');

Route::get('/tambahpekerja',[PekerjaController::class, 'tambahpekerja'])->name('tambahpekerja');

Route::post('/insertdata',[PekerjaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[PekerjaController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}',[PekerjaController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}',[PekerjaController::class, 'deletedata'])->name('deletedata');