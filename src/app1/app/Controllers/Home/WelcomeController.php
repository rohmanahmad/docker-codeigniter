<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class WelcomeController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
