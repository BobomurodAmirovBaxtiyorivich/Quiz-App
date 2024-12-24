<?php

use App\Route;
use Controller\UserController;

$route = new Route();

Route::getMethod('/', [UserController::class, 'index']);