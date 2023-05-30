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
        $practicum = $builder->select('practicums.*, laboratorians.user_id as userlaboratorian, users.*, assets.*')
            ->join('laboratorians', 'practicums.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->join('assets', 'practicums.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Manage Practicum',
            'practicum' => $practicum,
            'assets' => $this->assetModel->getAssetData()
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
            'asset_id' => $this->request->getVar('aset_id'),
            'user_id' => user_id(),
            'laboratorian_id' => $this->request->getVar('laboratorian'),
            'team' => $this->request->getVar('team'),
            'schedule' => $this->request->getVar('schedule'),
            'location' => $this->request->getVar('location'),
            'description' => $this->request->getVar('description'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to(url_to('practicum.manage'));
    }

    public function delete($id)
    {
        // dd($id);
        $this->practicumModel->delete($id);

        return redirect()->to(url_to('practicum.manage'));
    }
}
