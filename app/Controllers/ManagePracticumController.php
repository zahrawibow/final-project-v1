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
        $data = [
            'title' => 'Manage Practicum',
            'practicum' => $this->practicumModel->getPracticumData(),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $this->laboratoriansModel->getLaboratoriansData(),
        ];
        return view('manage/practicum/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Practicum',
            'practicum' => $this->practicumModel->getPracticumData(),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $this->laboratoriansModel->getLaboratoriansData(),
        ];
        return view('/manage/practicum/create', $data);
    }

    public function stored_practicum()
    {
        $this->practicumModel->save([
            'title' => $this->request->getVar('title'),
            'user_id' => user_id(),
            'team' => $this->request->getVar('team'),
            'laboratorian' => $this->request->getVar('laboratorian'),
            'schedule' => $this->request->getVar('schedule'),
            'location' => $this->request->getVar('location'),
            'description' => $this->request->getVar('description'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/manageprac');
    }
}
