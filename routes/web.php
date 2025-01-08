<?php

use App\Http\Controllers\SprintController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

// User crud start
Route::post('/user_create', [UserController::class, 'store'])->name('user.create');
Route::put('/user_update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user_delete', [UserController::class, 'destory'])->name('user.destory');
// User crud end

// Sprints start
Route::post('/sprint_create', [SprintController::class, 'store'])->name('sprint.create');
Route::put('/sprint_update/{id}', [SprintController::class, 'update'])->name('sprint.update');
Route::delete('/sprint_delete', [SprintController::class, 'destory'])->name('sprint.destory');
// Sprints end


// Task start
Route::post('/task_create', [TaskController::class, 'store'])->name('task.create');
Route::put('/task_update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task_delete', [TaskController::class, 'destory'])->name('task.destory');
// Task end


// User Stories start
Route::post('/stories_create', [UserStoriesController::class, 'store'])->name('stories.create');
Route::put('/stories_update/{id}', [UserStoriesController::class, 'update'])->name('stories.update');
Route::delete('/stories_delete', [UserStoriesController::class, 'destory'])->name('stories.destory');
// User Stories end


