<?php

namespace App\Helpers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

trait CustomAPIResponse
{
    use ResponseTrait;

    protected function successResponse(array $data = [], string $message = '', int $code = 200, bool $successStatus = true, int $limit = 0, int $offset = 0): ResponseInterface
    {
        $response = [
            'status' => $code,
            'success' => $successStatus,
            'message' => $message,
            'data' => $data
        ];

        return $this->respond($response, $code);
    }

    protected function emptyResponse(): ResponseInterface
    {
        $response = [
            'status' => 404,
            'success' => false,
            'message' => "Data kosong!",
        ];

        return $this->respond($response, 404);
    }
}
