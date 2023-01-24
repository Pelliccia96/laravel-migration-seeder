<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController as TrainController;

Route::get('/', [TrainController::class, 'index'])->name('home');
