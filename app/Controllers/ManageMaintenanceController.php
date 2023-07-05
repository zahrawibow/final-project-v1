<?php

namespace App\Controllers;

use App\Models\MaintenanceModel;
use App\Models\AssetModel;

class ManageMaintenanceController extends BaseController
{
    protected $maintenanceModel;
    protected $assetModel;


    public function __construct()
    {
        $this->maintenanceModel = new MaintenanceModel();
        $this->assetModel = new AssetModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('maintenance');
        $maintenance = $builder->select('maintenance.*, assets.name')
            ->join('assets', 'maintenance.asset_id = assets.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Manage Maintenance',
            'maintenance' => $maintenance

        ];
        // dd($data);
        return view('manage/maintenance/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Maintenance',
            'assets' => $this->assetModel->getAssetData(),
            // 'practicum' => $this->practicumModel->getPracticumData(),
            // 'assets' => $this->assetModel->getAssetData(),
            // 'laboratorians' => $laboratorian
        ];
        // dd($data);
        return view('/manage/maintenance/create', $data);
    }

    // public function create()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('laboratorians');
    //     $laboratorian = $builder->select('laboratorians.*, users.fullname')
    //         ->join('users', 'laboratorians.user_id = users.id')
    //         ->get()
    //         ->getResultArray();

    //     $data = [
    //         'title' => 'Lab Schedule',
    //         'laboratorians' => $laboratorian,

    //     ];
    //     return view('manage/schedule/create', $data);
    // }

    public function stored_maintenance()
    {
        $data = [
            'maintenance_name' => $this->request->getVar('maintenance_name'),
            'asset_id' => $this->request->getVar('asset_id'),
            'date' => $this->request->getVar('date'),
            'status' => $this->request->getVar('status'),
            'description' => $this->request->getVar('description')
        ];

        if ($this->maintenanceModel->save($data) == false) :
            return redirect()->back()->with('errors', $this->maintenanceModel->errors());
        endif;

        return redirect()->to(url_to('maintenance.manage'));
    }

    public function delete($id)
    {
        // dd($id);
        $this->maintenanceModel->delete($id);

        return redirect()->to(url_to('maintenance.manage'));
    }


    public function edit($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('maintenance');
        $maintenance = $builder->select('maintenance.*, assets.name')
            ->join('assets', 'maintenance.asset_id = assets.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Edit Detail',
            'assets' => $this->assetModel->getAssetData(),
            'maintenance' => $this->maintenanceModel->getMaintenanceData($id),
            // 'maintenance' => $maintenance
            // 'laboratorians' => $laboratorian
        ];

        // dd($data);
        return view('manage/maintenance/edit', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());

        $this->maintenanceModel->save([
            'id' => $id,
            'maintenance_name' => $this->request->getVar('maintenance_name'),
            'asset_id' => $this->request->getVar('asset_id'),
            'date' => $this->request->getVar('date'),
            'status' => $this->request->getVar('status'),
            'description' => $this->request->getVar('description')
        ]);

        return redirect()->to(url_to('maintenance.manage'));
    }
}
