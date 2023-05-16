<?php

namespace App\Controllers;

class AssetsController extends BaseController
{
    public function index()
    {
        //kalo ga pake getAsset di model
        // $assets = $this->assetModel->findAll();

        $data = [
            'title' => 'Assets',
            //udah pake getAsset di model
            'assets' => $this->assetModel->getAssetData()
        ];
        // dd($asset);
        return view('asset/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Asset',
        ];
        return view('asset/create', $data);
        // echo "hello";
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Detail',
            //udah pake getAsset di model
            // 'assets' => $this->assetModel->getAssetData()
        ];
        return view('asset/edit', $data);
    }

    public function show_detail($slug)
    {
        $data = [
            'title' => 'Asset Details',
            'assets' => $this->assetModel->getAssetData($slug)
        ];
        return view('asset/detail', $data);
    }
}
