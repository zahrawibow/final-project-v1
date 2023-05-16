<?php

namespace App\Controllers;

class LogbookController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Log Aset',
        ];
        return view('logbook/mainContent', $data);
    }

    public function create_loaning()
    {
        return view('logbook/loan');
    }

    public function create_returning()
    {
        return view('logbook/return');
    }

    public function create_logging()
    {
        return view('logbook/use');
    }
}
