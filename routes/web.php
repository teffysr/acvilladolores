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
Route::post('/form',[ContactController::class, 'sendForm']);
Route::get('/cursos',[\App\Http\Controllers\CoursesController::class, 'index']);
Route::get('/escuela-de-aviacion',[\App\Http\Controllers\SchoolController::class, 'index']);
Route::get('/otras_actividades',[\App\Http\Controllers\OtherActivitiesController::class, 'index']);
Route::get('/turismo',[\App\Http\Controllers\TourismController::class, 'index']);
Route::get('/galeria',[\App\Http\Controllers\GalleryController::class, 'index']);
