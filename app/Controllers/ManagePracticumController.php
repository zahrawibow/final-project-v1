<?php

namespace App\Controllers;

use App\Models\PracticumModel;
use App\Models\AssetModel;
use App\Models\LaboratoriansModel;

class ManagePracticumController extends BaseController
{
    protected $practicumModel;
    protected $assetModel;
    protected $laboratoriansModel;


    public function __construct()
    {
        $this->practicumModel = new PracticumModel();
        $this->assetModel = new AssetModel();
        $this->laboratoriansModel = new LaboratoriansModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('practicums');
        $practicum = $builder->select('practicums.*, laboratorians.user_id as userlaboratorian, users.fullname, assets.name')
            ->join('laboratorians', 'practicums.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->join('assets', 'practicums.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();



        $data = [
            'title' => 'Manage Practicum',
            'practicum' => $practicum,
            // 'assets' => $this->assetModel->getAssetData()
        ];
        return view('manage/practicum/index', $data);
    }

    public function create()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Create Practicum',
            'practicum' => $this->practicumModel->getPracticumData(),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $laboratorian
        ];
        return view('/manage/practicum/create', $data);
    }

    public function stored_practicum()
    {
        $this->practicumModel->save([
            'title' => $this->request->getVar('title'),
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'team' => $this->request->getVar('team'),
            'schedule' => $this->request->getVar('schedule'),
            'time' => $this->request->getVar('time'),
            'prac_location' => $this->request->getVar('prac_location'),
            'description' => $this->request->getVar('description'),
            'prac_status' => $this->request->getVar('prac_status')
        ]);

        return redirect()->to(url_to('practicum.manage'));
    }

    public function delete($id)
    {
        // dd($id);
        $this->practicumModel->delete($id);

        return redirect()->to(url_to('practicum.manage'));
    }


    // public function edit($id)
    // {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('practicums');
    //     $practicum = $builder->select('practicums.*, laboratorians.user_id as userlaboratorian, users.*, assets.*')
    //         ->join('laboratorians', 'practicums.laboratorian_id = laboratorians.id')
    //         ->join('users', 'users.id = laboratorians.user_id')
    //         ->join('assets', 'practicums.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
    //         ->get()
    //         ->getResultArray();


    //     dd($practicum);
    //     $data = [
    //         'title' => 'Manage Practicum',
    //         'practicum' => $practicum,
    //         'assets' => $this->assetModel->getAssetData()
    //     ];
    //     return view('manage/practicum/edit', $data);
    // }

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
            'practicum' => $this->practicumModel->getPracticumData($id),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $laboratorian
        ];

        // dd($data);
        return view('manage/practicum/edit', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());

        $this->practicumModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'team' => $this->request->getVar('team'),
            'schedule' => $this->request->getVar('schedule'),
            'time' => $this->request->getVar('time'),
            'prac_location' => $this->request->getVar('prac_location'),
            'description' => $this->request->getVar('description'),
            'prac_status' => $this->request->getVar('prac_status')
        ]);

        return redirect()->to(url_to('practicum.manage'));
    }
}
