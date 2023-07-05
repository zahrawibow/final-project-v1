<?php

namespace App\Filters;

use App\Helpers\CustomAPIResponse;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\HTTP\RequestTrait;
use Config\Services;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtFilter implements FilterInterface
{
    use RequestTrait;
    use CustomAPIResponse;

    public function before(RequestInterface $request, $arguments = null)
    {
        // $header = $request->getServer('HTTP_AUTHORIZATION');

        // $header = explode(' ', $header)[1];

        // try {
        //     helper('jwt');
        //     $encodedToken = getJWT($header);
        //     validateJWT($encodedToken);
        //     return $request;
        // } catch (Exception $e) {
        //     return Services::response()->setJSON(
        //         [
        //             'error' => $e->getMessage()
        //         ]
        //     )->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        // }

        $key = getenv('JWT_SECRET_KEY');
        $header = $request->getHeaderLine('Authorization');
        $token = null;

        if (!empty($header)) :
            $token = explode(' ', $header)[1];
        endif;

        if (is_null($token) || empty($token)) :
            return Services::response()->setBody('Akses ditolak')->setStatusCode(401);
        // return $this->respond(['data' => 'error'], 401);
        endif;


        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
        } catch (\Throwable $e) {
            return Services::response()->setBody('Akses ditolak')->setStatusCode(401);
        }

        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
