<?php

use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
