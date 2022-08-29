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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/job-search',  [App\Http\Controllers\JobController::class, 'index'])->name('job-search');

Route::get('/zoom', [\App\Http\Controllers\ZoomController::class, 'index'])->name('zoom');
Route::get('/zoom/create', [\App\Http\Controllers\ZoomController::class, 'create'])->name('zoom/create');
Route::post('/zoom/save', [\App\Http\Controllers\ZoomController::class, 'save'])->name('zoom/save');

Route::get('/identitas', [\App\Http\Controllers\IdentitasController::class, 'index'])->name('identitas');

Route::get('/kurikulum', [\App\Http\Controllers\KurikulumController::class, 'index'])->name('kurikulum');
Route::post('/kurikulum/save', [\App\Http\Controllers\KurikulumController::class, 'store'])->name('kurikulum/save');
Route::get('/kurikulum/edit/{id}', [\App\Http\Controllers\KurikulumController::class, 'edit'])->name('kurikulum/edit');
Route::post('/kurikulum/update/{id}', [\App\Http\Controllers\KurikulumController::class, 'update'])->name('kurikulum/update');
Route::delete('/kurikulum/delete/{id}', [\App\Http\Controllers\KurikulumController::class, 'destroy'])->name('kurikulum/delete');

Route::get('/thnakademik', [\App\Http\Controllers\ThnAkademikController::class, 'index'])->name('thnakademik');
Route::post('/thnakademik/save', [\App\Http\Controllers\ThnAkademikController::class, 'store'])->name('thnakademik/save');
Route::get('/thnakademik/edit/{id}', [\App\Http\Controllers\ThnAkademikController::class, 'edit'])->name('thnakademik/edit');
Route::put('/thnakademik/update/{id}', [\App\Http\Controllers\ThnAkademikController::class, 'update'])->name('thnakademik/update');
Route::delete('/thnakademik/delete/{id}', [\App\Http\Controllers\ThnAkademikController::class, 'destroy'])->name('thnakademik/delete');
