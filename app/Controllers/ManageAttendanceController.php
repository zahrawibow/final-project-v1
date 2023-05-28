<?php

namespace App\Controllers;

use App\Models\AttendanceModel;

class ManageAttendanceController extends BaseController
{
    protected $attendanceModel;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Manage Attendance',
            'attendances' => $this->attendanceModel->getAttendanceData(),
        ];
        return view('manage/logbook/attendanceReport', $data);
    }
}
