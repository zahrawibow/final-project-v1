<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class DashboardController extends BaseController
{
    protected $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
    }

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
    public function stored_attendance()
    {
        $this->dashboardModel->save([
            'activity' => $this->request->getVar('activity'),
            'description' => $this->request->getVar('description'),
            'user_id' => user_id(),
            // 'created_at' => now()
        ]);

        return redirect()->to('/');
        // return view('dashboard/radioisotope', $data);
    }
}
