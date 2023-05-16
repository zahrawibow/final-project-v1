<?php

namespace App\Controllers;

class AccountController extends BaseController
{
    public function create()
    {
        return view('account/create');
    }
    public function show_detail()
    {
        return view('account/detail');
    }
    public function edit()
    {
        return view('account/edit');
    }
    public function index()
    {
        return view('account/index');
    }
}
