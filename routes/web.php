<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('animal')->name('animal.')->group(function () {
    Route::get('/creer', [AnimalController::class, 'add'])->name('add');
    Route::get('/modifier/{id}', [AnimalController::class, 'edit'])->name('edit');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('delete');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('show');
});

// Page 404
Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});
