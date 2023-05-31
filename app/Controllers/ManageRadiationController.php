<?php

namespace App\Controllers;

use App\Models\RadiationModel;

class ManageRadiationController extends BaseController
{
    protected $radiationModel;



    public function __construct()
    {
        $this->radiationModel = new RadiationModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('radiation_history');
        $radiations = $builder->select('radiation_history.*, users.*, assets.*')
            // ->join('laboratorians', 'radiation_history.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = radiation_history.user_id')
            ->join('assets', 'radiation_history.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();

        // dd($radiations);
        $data = [
            'title' => 'Manage Radiation',
            'radiations' => $radiations,
        ];
        return view('manage/logbook/radiationHistory', $data);
    }
}
