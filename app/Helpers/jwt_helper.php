<?php

use \Myth\Auth\Models\UserModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


function getJWT($authenticationHeader)
{
    if (is_null($authenticationHeader)) {
        throw new Exception("Otentikasi Gagal", 401);
    }
    return explode(".", $authenticationHeader)[1];
}

function validateJWT($encodedToken)
{
    $key = getenv('JWT_SECRET_KEY');

    $decodedToken = JWT::decode($encodedToken, new Key($key, 'HS256'));
    $userModel = new UserModel();
    $userModel->getEmail($decodedToken->email);
}

function createJWT($email)
{
    $requestTime = time();
    $tokenTime = getenv('JWT_TIME_TO_LIVE');
    $expiredTime = $requestTime + $tokenTime;
    $payLoad =
        [
            'email' => $email,
            'iat' => $requestTime,
            'exp' => $expiredTime
        ];

    $jwt = JWT::encode($payLoad, getenv('JWT_SECRET_KEY'), 'HS256');
    return $jwt;
}
