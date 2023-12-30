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
    Route::get('/notes/{note:id}', [NoteController::class, 'show']);
    Route::get('/create', [NoteController::class, 'create']);
    Route::post('/store', [NoteController::class, 'store']);
    Route::get('/edit/{note:id}', [NoteController::class, 'edit']);
    Route::patch('/update/{note:id}', [NoteController::class, 'update']);
    Route::delete('/delete/{note:id}', [NoteController::class, 'destroy']);

    Route::delete('/logout', [UserController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'attempt']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'store']);
});
