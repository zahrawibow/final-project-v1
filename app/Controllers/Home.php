<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function signin()
    {
        return view('auth/signin');
    }
    public function signup()
    {
        return view('auth/signup');
    }
    public function landingPage()
    {
        return view('landingPage/content');
    }
}
