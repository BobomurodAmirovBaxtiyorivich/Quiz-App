<?php

namespace App\Controllers\API;

use App\Models\User;
use JetBrains\PhpStorm\NoReturn;
use Random\RandomException;
use App\Traits\Validator;
class UserController
{
    use Validator;
    /**
* @throws RandomException
*/
    #[NoReturn]public function store():void {
        $this->validate(
            ['full_name' => 'string',
            'email' => 'string',
            'password' => 'string'
            ]);
        $user = new User();
        $user->create($_POST['full_name'], $_POST['email'], $_POST['password']);
        APIresponse('User created successfully', 201);
    }
}