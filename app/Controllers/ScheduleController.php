<?php

namespace App\Controllers;


use App\Models\LaboratoriansModel;
use App\Models\ScheduleModel;
use \Myth\Auth\Models\UserModel;

class ScheduleController extends BaseController
{
    protected $scheduleModel;
    protected $laboratoriansModel;
    protected $userModel;


    public function __construct()
    {
        $this->scheduleModel = new ScheduleModel();
        $this->laboratoriansModel = new LaboratoriansModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('schedule');
        $schedule = $builder->select('schedule.*, laboratorians.user_id as idlaboratorian, users.fullname')
            ->join('laboratorians', 'schedule.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Lab Schedule',
            'schedule' => $schedule

        ];
        // dd($data);
        return view('schedule/index', $data);
    }

    public function manage_index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('schedule');
        $schedule = $builder->select('schedule.*, laboratorians.user_id as idlaboratorian, users.fullname')
            ->join('laboratorians', 'schedule.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Manage Schedule',
            'schedule' => $schedule
        ];
        // dd($data);
        return view('manage/schedule/index', $data);
    }

    // public function create()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('laboratorians');
    //     $laboratorian = $builder->select('laboratorians.*, users.fullname')
    //         ->join('users', 'laboratorians.user_id = users.id')
    //         ->get()
    //         ->getResultArray();

    //     $data = [
    //         'title' => 'Create Practicum',
    //         'practicum' => $this->practicumModel->getPracticumData(),
    //         'assets' => $this->assetModel->getAssetData(),
    //         'laboratorians' => $laboratorian
    //     ];
    //     return view('/manage/practicum/create', $data);
    // }

    public function create()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Lab Schedule',
            'laboratorians' => $laboratorian,

        ];
        return view('manage/schedule/create', $data);
    }

    public function stored_schedule()
    {
        $data = [
            'activity_name' => $this->request->getVar('activity_name'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'date' => $this->request->getVar('date'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'activity_location' => $this->request->getVar('activity_location'),
            'activity_status' => $this->request->getVar('activity_status'),
            'description' => $this->request->getVar('description')
        ];

        if ($this->scheduleModel->save($data) == false) :
            return redirect()->back()->with('errors', $this->scheduleModel->errors());
        endif;

        return redirect()->to(url_to('schedule.manage'));
    }

    public function delete($id)
    {
        // dd($id);
        $this->scheduleModel->delete($id);

        return redirect()->to(url_to('schedule.manage'));
    }


    public function edit($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Edit Detail',
            'schedule' => $this->scheduleModel->getScheduleData($id),
            'laboratorians' => $laboratorian
        ];

        // dd($data);
        return view('manage/schedule/edit', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());

        $this->scheduleModel->save([
            'id' => $id,
            'activity_name' => $this->request->getVar('activity_name'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'date' => $this->request->getVar('date'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'activity_location' => $this->request->getVar('activity_location'),
            'activity_status' => $this->request->getVar('activity_status'),
            'description' => $this->request->getVar('description')
        ]);

        return redirect()->to(url_to('schedule.manage'));
    }
}
