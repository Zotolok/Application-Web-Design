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
//Route::get('/library/{id}/edit',[CoursesController::class, 'edit']) -> name('courses.edit');

// 5. Update
//Route::put('/library/{id}',[CoursesController::class, 'update']) -> name('courses.update');

// 6. Delete
//Route::delete('/library/{id}', [CoursesController::class, 'destroy']) ->name('courses.destroy');

