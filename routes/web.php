<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class)
    ->names([
        'index' => 'tasks.index',
        'create' => 'tasks.create',
        'store' => 'tasks.store',
        'edit' => 'tasks.edit',
        'update' => 'tasks.update',
        'destroy' => 'tasks.destroy',
    ]);