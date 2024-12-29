<?php

namespace App\Http\Controllers\WEB;

class HomeController {

    public function home():void {
        views( 'home');
    }
}