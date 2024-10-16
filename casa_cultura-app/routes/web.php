<?php

use App\Http\Controllers\artistController;
use App\Http\Controllers\chapterController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\redirectController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

//?Inicio das rotas principais
Route::get('/', [redirectController::class, 'main']);
Route::get('/dashboard', [redirectController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('/courseEdit/{id}', [courseController::class, 'edit'])->name('course.edit');

    //*Inicio das rotas da parte de eventos
    Route::get('/eventIndex', [eventController::class, 'index'])->name('event.index');
    Route::get('/eventDetails/{id}', [eventController::class, 'detail'])->name('event.detail');
    Route::post('/eventStore', [eventController::class, 'store'])->name('event.store');
    Route::post('/eventUpdate/{id}', [eventController::class, 'update'])->name('event.update');
    Route::get('/eventDelete/{id}', [eventController::class, 'delete'])->name('event.delete');

    //*Inicio das rotas da parte de funcionarios
    Route::get('/employeeIndex', [employeeController::class, 'index'])->name('employee.index');
    Route::get('/employeeAll', [employeeController::class, 'all'])->name('employee.all');
    Route::get('/employeeDelete/{id}', [employeeController::class, 'delete'])->name('employee.delete');

    //*Inicio das rotas da parte de artista
    Route::get('/artistMain', [artistController::class, 'index'])->name('artist.index');
    Route::post('/artistStore', [artistController::class, 'store'])->name('artist.store');
    Route::post('/artistUpdate/{id}', [artistController::class, 'update'])->name('artist.update');
    Route::get('/artistDelete/{id}', [artistController::class, 'delete'])->name('artist.delete');

    //*Inicio das rotas da parte do aluno
    Route::get('/studentIndex', [studentController::class, 'index'])->name('student.index');
    Route::get('/studentAll', [studentController::class, 'all'])->name('student.all');
    Route::get('/studentDelete/{id}', [studentController::class, 'delete'])->name('student.delete');
    Route::post('/studentStore', [studentController::class, 'store'])->name('student.store');
    Route::post('/studentUpdate/{id}', [studentController::class, 'update'])->name('student.update');
    Route::post('/studentRegister', [studentController::class, 'register'])->name('student.register');

    //*Inicio das rotas de capitulo
    Route::post('/chapterStore', [chapterController::class, 'store'])->name('chapter.store');
    Route::post('/chapterUpdate/{id}', [chapterController::class, 'update'])->name('chapter.update');
    Route::get('/chapterDelete/{id}', [chapterController::class, 'delete'])->name('chapter.delete');

});

//?Inicio das rotas da parte da website
Route::get('/main', [redirectController::class, 'web']);
Route::get('/courseDetails/{id}', [redirectController::class, 'courseDetails'])->name('detailCourse');
Route::get('/eventDetail/{id}', [redirectController::class, 'eventDetails'])->name('detailEvents');

require __DIR__ . '/auth.php';