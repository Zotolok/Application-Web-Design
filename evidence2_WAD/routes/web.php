<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// 1. Index
Route::get('/library/index',[BookController::class, 'index']) -> name('book.index');

// 2. Create
Route::get('/library/create',[BookController::class, 'create']) -> name('book.create');

// 3. Store
Route::post('/library/store',[BookController::class, 'store']) -> name('book.store');

// 4. Edit
Route::get('/library/{id}/edit',[BookController::class, 'edit']) -> name('book.edit');

// 5. Update
Route::put('/library/{id}',[BookController::class, 'update']) -> name('book.update');

// 6. Delete
Route::delete('/library/{id}', [BookController::class, 'destroy']) ->name('book.destroy');

