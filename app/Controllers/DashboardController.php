<?php

namespace App\Controllers;

use App\Models\AssetModel;
use App\Models\AttendanceModel;

class DashboardController extends BaseController
{
    protected $attendanceModel;
    protected $assetCount;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
        $this->assetCount = (new AssetModel())->countAllResults();
    }

    public function index()
    {
        $data = [
            'title' => 'Pagu Utama',
            'asset_count' => $this->assetCount,
            'visitors' => $this->attendanceModel->countAllResults()
        ];

        return view('dashboard/index', $data);
    }

    public function testing()
    {
        $data = [
            'title' => 'Testing'
        ];

        return view('dashboard/testing', $data);
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
        $this->attendanceModel->save([
            'activity' => $this->request->getVar('activity'),
            'description' => $this->request->getVar('description'),
            'user_id' => user_id(),
            // 'created_at' => now()
        ]);

        return redirect()->to('/');
        // return view('dashboard/radioisotope', $data);
    }
}
