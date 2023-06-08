<?php

namespace App\Controllers;

use App\Models\LogsModel;
use App\Models\AssetModel;
use App\Models\LaboratoriansModel;
use App\Models\LoansModel;
use App\Models\ReturnsModel;
use App\Models\RadiationModel;

class LogbookController extends BaseController
{
    protected $logsModel;
    protected $assetModel;
    protected $laboratoriansModel;
    protected $loansModel;
    protected $returnsModel;
    protected $radiationModel;

    public function __construct()
    {
        $this->logsModel = new LogsModel();
        $this->assetModel = new AssetModel();
        $this->laboratoriansModel = new LaboratoriansModel();
        $this->loansModel = new LoansModel();
        $this->returnsModel = new ReturnsModel();
        $this->radiationModel = new RadiationModel();
    }

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Log Aset',
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $laboratorian
        ];
        return view('logbook/mainContent', $data);
    }

    public function asset_loans()
    {
        $data = [
            'title' => 'Peminjaman Aset',
            'assets' => $this->assetModel->getAssetData()
        ];
        return view('logbook/asset_loans', $data);
    }

    public function stored_logging()
    {
        $this->logsModel->save([
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'purpose' => $this->request->getVar('purpose'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'currant_condition' => $this->request->getVar('currant_condition')
        ]);

        return redirect()->to('/logbook');
    }

    public function stored_loaning()
    {
        $this->loansModel->save([
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'purpose' => $this->request->getVar('purpose'),
            'loan_time' => $this->request->getVar('loan_time'),
            'permission_tax' => $this->request->getVar('permission_tax')
        ]);

        return redirect()->to('/logbook');
    }


    public function stored_radiation()
    {
        $this->radiationModel->save([
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'activity' => $this->request->getVar('activity'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'radioisotope' => $this->request->getVar('radioisotope'),
            'radiation' => $this->request->getVar('radiation')
        ]);

        return redirect()->to('/logbook');
    }
}
