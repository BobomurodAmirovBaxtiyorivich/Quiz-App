<?php

use App\Route;

if (Route::isAPIcall()){
    require 'Routes/api.php';
    exit();
} else {
    require 'Routes/web.php';
}
