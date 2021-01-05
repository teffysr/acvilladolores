<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('panel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('quienes_somos');
});
Route::get('/quienes-somos', function () {
    return view('quienes_somos');
});
Route::get('/contacto',[\App\Http\Controllers\ContactController::class, 'index']);
Route::post('/form',[\App\Http\Controllers\ContactController::class, 'sendForm']);
Route::get('/cursos',[\App\Http\Controllers\CoursesController::class, 'index']);
Route::get('/escuela-de-aviacion',[\App\Http\Controllers\SchoolController::class, 'index']);
Route::get('/otras_actividades',[\App\Http\Controllers\OtherActivitiesController::class, 'index']);
Route::get('/turismo',[\App\Http\Controllers\TourismController::class, 'index']);
Route::get('/galeria',[\App\Http\Controllers\GalleryController::class, 'index']);


require __DIR__.'/auth.php';
