<?php

use App\Http\Controllers\artistController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\userController;
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

    //*Inicio das rotas de adicao de usuario
    Route::post('/storeUser', [userController::class, 'storeUser'])->name('storeUser');
    Route::post('/userUpdate/{id}', [userController::class, 'update'])->name('user.update');

    //*Inicio das rotas da parte de formadores
    Route::get('/trainerAdd', [trainerController::class, 'index'])->name('trainer.index');
    Route::get('/trainerMain', [trainerController::class, 'all'])->name('trainer.all');
    Route::get('/trainerDelete/{id}', [trainerController::class, 'delete'])->name('trainer.delete');

    //*Inicio das rotas da parte de cursos
    Route::get('/courseMain', [courseController::class, 'index'])->name('course.index');
    Route::get('/courseDelete/{id}', [courseController::class, 'delete'])->name('course.delete');
    Route::post('/courseUpdate/{id}', [courseController::class, 'update'])->name('course.update');
    Route::post('/courseStore', [courseController::class, 'store'])->name('course.store');
    Route::get('/courseAll', [courseController::class, 'all'])->name('course.all');
    Route::get('/courseDetail/{id}', [courseController::class, 'detail'])->name('course.detail');

    //*Inicio das rotas da parte de funcionarios

    //*Inicio das rotas da parte de artista
    Route::get('/artistMain', [artistController::class, 'index'])->name('artist.index');

    //*Inicio das rotas da parte do aluno

});

require __DIR__ . '/auth.php';