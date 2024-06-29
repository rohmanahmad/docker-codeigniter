<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class RegistrationController extends BaseController
{
    public function index(): string
    {
        return json_encode(['message' => 'user registration controller']);
    }
}
