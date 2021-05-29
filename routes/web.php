<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GropuController;
use App\Http\Controllers\AsistenController;
// Aquí vas a importar tus controladores
// use App\Http\Controllers\NombreController;

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
/* Ruta Login */
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas para vistas */
Route::resources([
    'student' => StudentController::class,
    'subject' => SubjectController::class,
    'teacher' => TeacherController::class,
    'gropu' => GropuController::class,
    'asisten' => AsistenController::class,
]);

/* Rutas para vistas estaticas*/
Route::get('/acercaDe', [App\Http\Controllers\InformacionController::class, 'acercaDe'])->name('acercaDe');
Route::get('/contacto', [App\Http\Controllers\InformacionController::class, 'contacto'])->name('contacto');
Route::get('/politicas', [App\Http\Controllers\InformacionController::class, 'politicas'])->name('politicas');
Route::get('/privacidad', [App\Http\Controllers\InformacionController::class, 'privacidad'])->name('privacidad');