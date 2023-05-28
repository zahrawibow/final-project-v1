<?php

namespace App\Controllers;

use App\Models\AttendanceModel;

class ManageAttendanceController extends BaseController
{
    protected $attendanceModel;
    protected $attendances;

    public function __construct()
    {
        // $this->attendanceModel = new AttendanceModel();
        $db      = \Config\Database::connect();
        $builder = $db->table('attendances');
        $this->attendances = $builder->select('attendances.user_id, attendances.activity,attendances.description, users.fullname')
            ->join('users', 'attendances.user_id = users.id')
            ->get()
            ->getResultArray();
    }

    public function index()
    {
        $data = [
            'title' => 'Manage Attendance',
            'attendances' => $this->attendances,
        ];
        return view('manage/logbook/attendanceReport', $data);
    }
}
