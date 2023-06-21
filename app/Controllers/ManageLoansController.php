<?php

namespace App\Controllers;

use App\Models\LoansModel;
use App\Models\AssetModel;

class ManageLoansController extends BaseController
{
    protected $loansModel;

    public function __construct()
    {
        $this->loansModel = new LoansModel();
        $this->assetModel = new AssetModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asset_loans');
        $loansjoin = $builder->select('asset_loans.*, users.fullname, assets.name, slug')
            ->join('users', 'asset_loans.user_id = users.id')
            ->join('assets', 'asset_loans.asset_id = assets.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Manage Loans Asset',
            // 'loansjoin' => $this->loansModel->getLoansData()
            'loansjoin' => $loansjoin
        ];
        // dd($loansjoin);
        return view('manage/logbook/loansreport', $data);
    }

    public function verified()
    {
    }
}
