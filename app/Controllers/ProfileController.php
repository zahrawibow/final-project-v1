<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Profile',
        ];
        return view('profile/index', $data);
    }
}
