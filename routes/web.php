<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/sondage/create', [SondageController::class, 'create'])->name('sondage.create');
Route::post('/sondage', [SondageController::class, 'store'])->name('sondage.store');
Route::get('/sondage/{id}', [SondageController::class, 'show'])->name('sondage.show');
Route::post('/sondage/{id}/respond', [SondageController::class, 'respond'])->name('sondage.respond');
Route::get('/sondage/{id}/results', [SondageController::class, 'results'])->name('sondage.results');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
