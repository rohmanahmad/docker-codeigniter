<?php

namespace App\Controllers\Users;

use OpenApi\Annotations as OA;
use App\Controllers\BaseController;

/**
 * @OA\PathItem(
 *  description="Codeigniter API Specs",
 *  path="/products/{product}",
 * )
 */
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
