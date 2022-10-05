<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tutors', [App\Http\Controllers\HomeController::class, 'tutors'])->name('tutors');

Route::get('/chatting', [App\Http\Controllers\chatEngine::class, 'chatnow'])->name('chatnow');
Route::get('/chatting/{id}', [App\Http\Controllers\chatEngine::class, 'chatnow'])->name('chatnow');
Route::post('/initializechat', [App\Http\Controllers\chatEngine::class, 'initializeChat'])->name('initializechat');