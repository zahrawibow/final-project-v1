<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pagu Utama',
        ];
        return view('dashboard/index', $data);
    }

    public function attendanceCreate()
    {
        $data = [
            'title' => 'Kunjungan',
        ];
        return view('dashboard/attendance', $data);
    }

    public function radioisotope()
    {
        $data = [
            'title' => 'Informasi Radiosiotop',
        ];
        return view('dashboard/radioisotope', $data);
    }
}
