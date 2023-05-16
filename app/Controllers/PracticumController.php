<?php

namespace App\Controllers;

class PracticumController extends BaseController
{
    public function index()
    {
        return view('practicum/mainContent');
    }

    public function show_module()
    {
        return view('practicum/module');
    }

    public function show_schedule()
    {
        return view('practicum/schedule');
    }

    public function show_team()
    {
        return view('practicum/team');
    }
}
