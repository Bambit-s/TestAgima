<?php

use App\Http\Controllers\ControllerTask1;
use App\Http\Controllers\ControllerTask2;
use App\Http\Controllers\ControllerTask3;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ControllerTask1', [ControllerTask1::class, 'read']);
Route::post('/ControllerTask1', [ControllerTask1::class, 'validation'])->name('Task1');

Route::get('/ControllerTask2', [ControllerTask2::class, 'read']);

Route::get('/ControllerTask3', [ControllerTask3::class, 'read']);
