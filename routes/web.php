<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('print');
});

Route::get('index', [PpdbController::class, 'index'])->name('index');
Route::get('index/tambah', [PpdbController::class, 'create'])->name('create');
Route::post('index/tambah', [PpdbController::class, 'store'])->name('store');
Route::get('index/edit/{id}', [PpdbController::class, 'edit'])->name('edit');
Route::put('index/edit/{id}', [PpdbController::class, 'update'])->name('update');
Route::get('index/hapus/{id}', [PpdbController::class, 'destroy'])->name('destroy');
Route::get('/pdf', [PpdbController::class, 'exportPDF']);

