<?php

use Source\Route;
use App\Controllers\API\UserController;

Route::postMethod('/api/test', [UserController::class, 'store']);