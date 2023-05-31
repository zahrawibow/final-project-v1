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
        $db = \Config\Database::connect();
        $builder = $db->table('asset_logs');
        $logs = $builder->select('asset_logs.*, laboratorians.user_id as userlaboratorian, users.*, assets.*')
            ->join('laboratorians', 'asset_logs.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->join('assets', 'asset_logs.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();
      
        $data = [
            'title' => 'Manage logs',
            'logs' => $logs
        ];
        return view('manage/logbook/logsReport', $data);
    }
}
