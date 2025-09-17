<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Resultcontrollerr;
use App\Http\Controllers\LotofacilController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');

Route::get('/', function () {
    return view('admin.pages.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //insert
    Route::get('/lotofacil', [LotofacilController::class, 'index'])->name('lotofacil.index');
    Route::post('/lotofacil/store', [LotofacilController::class, 'store'])->name('admin.lotofacil.store');
    Route::get('/lotofacil/destroy/{id}', [LotofacilController::class, 'destroy'])->name('lotofacil.destroy');
    // gera numbers

    // result
    Route::get('/lotofacil/result', [Resultcontrollerr::class, 'index'])->name('admin.lotofacil.result.index');
    Route::post('lotofacil/result/store', [Resultcontrollerr::class, 'store'])->name('admin.lotofacil.result.store');
});

require __DIR__ . '/auth.php';
