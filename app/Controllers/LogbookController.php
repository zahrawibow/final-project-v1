<?php

namespace App\Controllers;

use App\Models\LogsModel;
use App\Models\AssetModel;
use App\Models\LaboratoriansModel;
use App\Models\LoansModel;

class LogbookController extends BaseController
{
    protected $logsModel;
    protected $assetModel;
    protected $laboratoriansModel;
    protected $loansModel;

    public function __construct()
    {
        $this->logsModel = new LogsModel();
        $this->assetModel = new AssetModel();
        $this->laboratoriansModel = new LaboratoriansModel();
        $this->loansModel = new LoansModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Log Aset',
            'assets' => $this->assetModel->getAssetData(),
            // 'laboratorians' => $this->laboratoriansModel->getLaboratoriansData()
        ];
        return view('logbook/mainContent', $data);
    }

    public function stored_logging()
    {
        $this->logsModel->save([
            'aset_id' => $this->request->getVar('aset_id'),
            'user_id' => user_id(),
            'purpose' => $this->request->getVar('purpose'),
            'laboratorian' => $this->request->getVar('laboratorian'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'currant_condition' => $this->request->getVar('currant_condition')
        ]);

        return redirect()->to('/logbook');
    }

    public function stored_loaning()
    {
        $this->loansModel->save([
            'aset_id' => $this->request->getVar('aset_id'),
            'user_id' => user_id(),
            'purpose' => $this->request->getVar('purpose'),
            'loan_time' => $this->request->getVar('loan_time'),
            'currant_condition' => $this->request->getVar('currant_condition'),
            'permission_tax' => $this->request->getVar('permission_tax')
        ]);

        return redirect()->to('/logbook');
    }

    // public function create_loaning()
    // {
    //     return view('logbook/loan');
    // }

    // public function create_returning()
    // {
    //     return view('logbook/return');
    // }

    // public function create_logging()
    // {
    //     return view('logbook/use');
    // }
}
