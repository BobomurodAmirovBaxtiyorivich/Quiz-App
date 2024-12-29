<?php

use Src\Route;
use App\Http\Controllers\WEB\HomeController;

Route::getMethod('/', [HomeController::class, 'home']);