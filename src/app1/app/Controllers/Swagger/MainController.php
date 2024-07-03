<?php

namespace App\Controllers\Swagger;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index(): string
    {
      return view('swagger/documentation');
    }
}
