<?php

namespace App\Controllers\Swagger;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class JsonSpecController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        try {
            $path = APPPATH . 'Controllers';
            $openapi = \OpenApi\Generator::scan([$path]);
            // $json = $this->setResponseFormat('json')->respond(['message' => 'swagger spec controller']);
            $yaml = $openapi->toYaml();
            return $yaml;
        } catch (\Exception $err) {
            return $err->getMessage();
        }
    }
}
