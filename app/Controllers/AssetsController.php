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
        // Writable
        // return $this->response->download(WRITEPATH . 'uploads/spec/nanana.png', null);
        // Public
        // return $this->response->download('spec/1688365253_354832343f9880b47996.png', null);

        session();
        $data = [
            'title' => 'Create Asset',
            'validation' => \config\Services::validation()
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
        // Validasi Manual dan foto aset
        $validation = $this->validate([
            'manual' => 'ext_in[spec,pdf]|max_size[spec,10240]',
            'tool-img' => 'is_image[tool-img]|max_size[tool-img,3072]'
        ], [
            'manual' => [
                'ext_in' => 'File Spesifikasi/Manual harus berformat pdf'
            ],
            'tool-img' => [
                'is_image' => 'Foto aset tidak valid',
                'max_size' => 'Foto aset maksimum berukuran 3 MB'
            ]
        ]);

        // Jika validasi gaga;
        if (!$validation) :
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        endif;

        $slug = url_title($this->request->getVar('name'), '-', true) . Time::now()->getTimeStamp();

        $data = [
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
            'user_id' => user_id()
        ];

        // Mengambil file manual dan foto
        $spec = $this->request->getFile('manual');
        $photo = $this->request->getFile('tool-img');

        // Memasukkan data manual dan photo ke dalam array data
        // Untuk diinsert ke database
        if ($spec->getName()) :
            $data += [
                'manual' => $spec->getRandomName()
            ];
        endif;

        if ($photo->getName()) :
            $data += [
                'asset_images' => $photo->getRandomName()
            ];
        endif;

        // Proses simpan ke database dan validasi data
        if ($this->assetModel->save($data) === false) :
            return redirect()->back()->withInput()->with('errors', $this->assetModel->errors());
        endif;

        // Simpan file
        if ($data['manual']) :
            // Menyimpan di writable
            $spec->store('manual', $data['manual']);
        endif;

        if ($data['asset_images']) :
            $photo->move('img', $data['asset_images']);
        endif;

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

        $data = [
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
        ];

        if ($this->assetModel->save($data) == false) :
            return redirect()->back()->with('errors', $this->assetModel->errors());
        endif;
        return redirect()->to('/asset');
    }

    public function download()
    {
        $fileName = $this->request->getVar('manual');
        return $this->response->download(WRITEPATH . 'uploads/manual/' . $fileName, null);
    }
}
