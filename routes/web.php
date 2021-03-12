<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

/* Ruta Login */
Route::resources([
    'students' => StudentController::class,
    // Aquí vas a agregar tusnuevas rutas de tipo resource
    // 'nombreRuta' => NombreController::class,
]);