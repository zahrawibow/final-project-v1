<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use CodeIgniter\API\ResponseTrait;
use \Myth\Auth\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class Authentication extends ResourceController
{
    use CustomAPIResponse;
    protected $auth;

    public function __construct()
    {
        $this->auth = service('authentication');
    }

    public function index()
    {
        $validation = \config\Services::validation();
        $rule = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Silakan Masukan Email',
                    'valid_email' => 'Silakan Masukan Email yang Valid'
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silakan Masukan Password'
                ]
            ]
        ];
        $validation->setRules($rule);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->fail($validation->getErrors());
        }

        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // $data = $model->getEmail($email);
        // if (password_hash(base64_encode(hash('sha384', $password, true)), PASSWORD_DEFAULT) != $data->password_hash) {
        //     return $this->fail("Password Tidak Sesuai");
        // }

        if (!$this->auth->attempt(['email' => $email, 'password' => $password])) {
            return $this->successResponse([], "Kredensial tidak valid", 401, false);
        }

        $key = getenv('JWT_SECRET_KEY');
        $iat = time();
        $exp = $iat + getenv('JWT_TIME_TO_LIVE');

        $payload = [
            'iat' => $iat,
            'exp' => $exp,
            'email' => $email
        ];

        $token = JWT::encode($payload, $key, 'HS256');

        // return $this->respond($key);

        // helper('jwt');
        return $this->successResponse(['access_token' => $token], "Berhasil otentikasi", 200);
    }
}
