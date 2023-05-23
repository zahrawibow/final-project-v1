<?php

namespace App\Controllers;

use App\Models\PracticumModel;
use App\Models\AssetModel;
use App\Models\LaboratoriansModel;

class PracticumController extends BaseController
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
            'title' => 'Practicum',
            'practicum' => $this->practicumModel->getPracticumData(),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $this->laboratoriansModel->getLaboratoriansData(),
        ];
        return view('practicum/mainContent', $data);
    }
}
