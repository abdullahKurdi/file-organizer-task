<?php

use Tamatem\Http\Route;

use App\Controllers\HomeController;

Route::get('/', [HomeController::class ,'index']);