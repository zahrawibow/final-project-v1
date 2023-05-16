<?php

namespace App\Controllers;

class ScheduleController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lab Schedule',
        ];
        return view('schedule/index', $data);
    }
}
