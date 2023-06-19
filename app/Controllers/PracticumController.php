<?php

namespace App\Controllers;

use App\Models\PracticumModel;

class PracticumController extends BaseController
{
    protected $practicumModel;



    public function __construct()
    {
        $this->practicumModel = new PracticumModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('practicums');
        $practicum = $builder->select('practicums.*, laboratorians.user_id as userlaboratorian, users.fullname, assets.name, assets.manual')
            ->join('laboratorians', 'practicums.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->join('assets', 'practicums.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Practicum',
            'practicum' => $practicum
        ];
        return view('practicum/mainContent', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Practicum Detail',
            'practicum' => $this->practicumModel->getPracticumData($id)
        ];
        return view('practicum/detail', $data);
    }
}
