<?php

namespace App\Controllers;

class MaintenanceController extends BaseController
{
    public function index()
    {
        return view('maintenance/mainContent');
    }
    public function create()
    {
        return view('maintenance/create');
    }
    public function edit()
    {
        return view('maintenance/edit');
    }
    public function show_detail()
    {
        return view('maintenance/detail');
    }
}
