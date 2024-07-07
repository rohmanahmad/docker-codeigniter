<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use OpenApi\Attributes as OA;

#[OA\Get(
    path: "/api/v1/users",
    summary: "List all Users",
    security: [
        [
            'bearerAuth' => []
        ]
    ],
    tags: ["Users"],
    responses: [
        new OA\Response(response: 200, description: "users retrieved success"),
        new OA\Response(response: 403, description: "Unauthorized"),
        new OA\Response(response: 404, description: "not found"),
        new OA\Response(response: 500, description: "Server Error")
    ]
)]
class MainUsersController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/api/data.json",
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */
    public function index()
    {
        return json_encode(['message' => 'user main controller']);
    }
}
