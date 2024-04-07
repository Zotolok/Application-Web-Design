<?php

use Illuminate\Support\Facades\Route;

// 1. Index
Route::get('/courses/index',[CoursesController::class, 'index']) -> name('courses.index');
// name('courses.index) es literalmente el nombre que le damos a esta ruta: http://localhost/actividad8_WAD/public/courses/create
// Solo hacemos alusión a su nombre

// 2. Create
Route::get('/courses/create',[CoursesController::class, 'create']) -> name('courses.create');

// 3. Store
Route::post('/courses/store',[CoursesController::class, 'store']) -> name('courses.store');

// 4. Edit
Route::get('/courses/{id}/edit',[CoursesController::class, 'edit']) -> name('courses.edit');

// 5. Update
Route::put('/courses/{id}',[CoursesController::class, 'update']) -> name('courses.update');

// 6. Delete
Route::delete('/courses/{id}', [CoursesController::class, 'destroy']) ->name('courses.destroy');

