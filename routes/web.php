<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RawatJalanController;
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
Route::prefix('/rawat-jalan')->group(function () {
    Route::get('/', [RawatJalanController::class, 'index'])->name('rawat-jalan.index');
    
    Route::post('/store', [RawatJalanController::class, 'store'])->name('rawat-jalan.store');
    Route::post('/update/{id}', [RawatJalanController::class, 'update'])->name('rawat-jalan.update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
