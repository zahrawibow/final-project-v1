<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class AssetsController extends BaseController
{
    public function index()
    {
        //kalo ga pake getAsset di model
        // $assets = $this->assetModel->findAll();

        $data = [
            'title' => 'Assets',
            'assets' => $this->assetModel->getAssetData()
        ];
        return view('asset/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Asset',
        ];
        return view('asset/create', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Detail',
            'assets' => $this->assetModel->getAssetData($slug)
        ];
        return view('asset/edit', $data);
    }

    public function stored_asset()
    {
        $slug = url_title($this->request->getVar('name'), '-', true) . Time::now()->getTimeStamp();
        $this->assetModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'merk' => $this->request->getVar('merk'),
            'series' => $this->request->getVar('series'),
            'price' => $this->request->getVar('price'),
            'count' => $this->request->getVar('count'),
            'status' => $this->request->getVar('status'),
            'condition' => $this->request->getVar('condition'),
            'purchase_date' => $this->request->getVar('purchase_date'),
            'description' => $this->request->getVar('description'),
            'location' => $this->request->getVar('location'),
            'inventory_number' => $this->request->getVar('inventory_number'),
            // 'tool_img1' => $this->request->getVar('tool_img1'),
            // 'spec' => $this->request->getVar('spec'),
            'manual' => $this->request->getVar('manual'),
            // 'lisence' => $this->request->getVar('lisence'),
            'user_id' => user_id()
        ]);


        // session()->setFlashdata('succes', 'Data berhasil ditambahkan'); buat sweet alert
        return redirect()->to('/asset');
    }

    public function show_detail($slug)
    {
        $data = [
            'title' => 'Asset Details',
            'assets' => $this->assetModel->getAssetData($slug)
        ];
        return view('asset/detail', $data);
    }

    public function delete($id)
    {
        $this->assetModel->delete($id);
        return redirect()->to('/asset');
    }

    public function update($id)
    {
        // dd($this->request->getVar());

        $slug = url_title($this->request->getVar('name'), '-', true) . Time::now()->getTimeStamp();
        $this->assetModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'merk' => $this->request->getVar('merk'),
            'series' => $this->request->getVar('series'),
            'price' => $this->request->getVar('price'),
            'count' => $this->request->getVar('count'),
            'status' => $this->request->getVar('status'),
            'condition' => $this->request->getVar('condition'),
            'purchase_date' => $this->request->getVar('purchase_date'),
            'description' => $this->request->getVar('description'),
            'location' => $this->request->getVar('location'),
            'inventory_number' => $this->request->getVar('inventory_number'),
            // 'tool_img1' => $this->request->getVar('tool_img1'),
            // 'spec' => $this->request->getVar('spec'),
            'manual' => $this->request->getVar('manual'),
            // 'lisence' => $this->request->getVar('lisence'),
            'user_id' => user_id()
        ]);
        return redirect()->to('/asset');
    }
}
