<?php

//use App\Route;
//use Controller\UserController;
use App\Models\User;

$user = new User();

try{dd($user->create("Minato Namikaze", 'yelloflash@gmail.com', "Kushina"));}catch(\Random\RandomException $e){

}


//$route = new Route();
//
//Route::getMethod('/', [UserController::class, 'index']);