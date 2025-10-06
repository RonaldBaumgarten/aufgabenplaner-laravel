<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'show']);

Route::get('/messages', [MessageController::class, 'showAll']);
