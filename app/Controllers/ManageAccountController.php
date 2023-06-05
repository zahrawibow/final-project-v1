<?php

namespace App\Controllers;

class ManageAccountController extends BaseController
{
    public function index()
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'Manage  Account',
            'accounts' => $users->findAll()
        ];
        return view('account/index', $data);
    }
}
