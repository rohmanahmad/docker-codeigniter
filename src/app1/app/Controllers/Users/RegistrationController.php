<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use OpenApi\Attributes as OA;

#[OA\Post(
    path: "/api/v1/users/registration",
    summary: "Register New User",
    security: [
        // [
        //     'bearerAuth' => []
        // ]
    ],
    tags: ["Users"],
    responses: [
        new OA\Response(response: 200, description: "User Registered Successfully"),
        new OA\Response(response: 403, description: "Unauthorized"),
        new OA\Response(response: 404, description: "Not Found"),
        new OA\Response(response: 500, description: "Server Error")
    ]
)]
class RegistrationController extends BaseController
{
    public function index(): string
    {
        return json_encode(['message' => 'user registration controller']);
    }
}
