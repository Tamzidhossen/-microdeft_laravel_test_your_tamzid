<?php

use App\Http\Controllers\departments;
use App\Http\Controllers\lawyers;
use Illuminate\Support\Facades\Route;

Route::get('/', [lawyers::class, 'DynamicForm'])->name('dynamic.form');
Route::post('/form', [lawyers::class, 'addForm'])->name('add.form');
Route::get('/validation', [departments::class, 'Validation'])->name('validation');
Route::post('/filtering', [departments::class, 'filtering'])->name('filtering');
