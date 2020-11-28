<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('quienes_somos');
});
Route::get('/quienes-somos', function () {
    return view('quienes_somos');
});
Route::get('/contacto',[ContactController::class, 'index']);
Route::get('/cursos',[\App\Http\Controllers\CoursesController::class, 'index']);
Route::get('/escuela-de-aviacion',[\App\Http\Controllers\SchoolController::class, 'index']);
Route::get('/estudiantes',[\App\Http\Controllers\StudentsController::class, 'index']);
Route::get('/extranjeros',[\App\Http\Controllers\ForeingController::class, 'index']);
Route::get('/galeria',[\App\Http\Controllers\GalleryController::class, 'index']);
