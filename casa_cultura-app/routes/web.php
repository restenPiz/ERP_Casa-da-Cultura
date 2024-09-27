<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //*Inicio das rotas da parte de cursos
    Route::get('/courseMain', [courseController::class, 'index'])->name('course.index');

    //*Inicio das rotas da parte de funcionarios

    //*Inicio das rotas da parte de formadores

    //*Inicio das rotas da parte de artista
});

require __DIR__ . '/auth.php';