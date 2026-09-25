<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index']);

Route::get('/teachers', [TeachersController::class, 'index']);

