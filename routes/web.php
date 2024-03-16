<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\GraciasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateController;
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

Route::get('/suscripcion', function () {
    return view('suscripcion');
})->middleware(['auth', 'verified'])->name('suscripcion');

//Route::get('/profesores',[ProfesorController::class,'index'])->name('profesores');

Route::get('/profesores', [ProfesorController::class,'index'])->middleware(['auth', 'verified'])->name('profesores');

Route::post('/gracias', [GraciasController::class,'index'])->name('gracias');



Route::middleware('admin')->group(function () {
    Route::resource('admin', AdminController::class)->middleware('auth');
    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    Route::resource('update', UpdateController::class)->middleware('auth');
    Route::post('/update', [UpdateController::class,'index'])->name('update');
});

//Route::get('/admin', [AdminController::class,'index'])->name('admin');
//Route::post('/update', [UpdateController::class,'index'])->name('update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
