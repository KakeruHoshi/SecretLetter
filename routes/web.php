<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LettersController;

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

Route::get('/', [LettersController::class, 'index']);
Route::get('/write', [LettersController::class, 'create']);
Route::get('/{id}', [LettersController::class, 'show']);
Route::post('/store', [LettersController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
