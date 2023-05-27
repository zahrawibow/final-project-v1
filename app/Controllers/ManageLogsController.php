<?php

namespace App\Controllers;

use App\Models\LogsModel;

class ManageLogsController extends BaseController
{
    protected $logsModel;

    public function __construct()
    {
        $this->logsModel = new  LogsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Manage logs',
            'logs' => $this->logsModel->getLogsData(),
        ];
        return view('manage/logbook/logsReport', $data);
    }
}
