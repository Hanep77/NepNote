<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [NoteController::class, 'index']);
    Route::get('/create', [NoteController::class, 'create']);
    Route::get('/note/{note:id}', [NoteController::class, 'create']);

    Route::delete('/logout', [UserController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'attempt']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'store']);
});
