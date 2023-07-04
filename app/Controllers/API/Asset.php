<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\AssetModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;

class Asset extends ResourceController
{
    use CustomAPIResponse;

    protected $model;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        $this->model = new AssetModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $limit = $this->request->getVar('limit');
        $offset = $this->request->getVar('offset');

        $data = $this->model->findAll($limit ?? $this->limit, $offset ?? $this->offset);

        return $this->successResponse($data, "Semua Data Aset");
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        // Cari di database
        $data = $this->model->find($id);

        // Jika ID tidak ditemukan
        if (!$data) :
            return $this->emptyResponse();
        endif;

        // Jika sukses
        return $this->successResponse($data, "Data Aset ID-$id");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
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
            // 'tool_img1' => $this->request->getVar('tool_img1'),
            // 'spec' => $this->request->getVar('spec'),
            // 'manual' => $this->request->getVar('manual'),
            // 'lisence' => $this->request->getVar('lisence'),
            'user_id' => user_id()
        ];

        if (!$this->model->save($data)) {
            return $this->successResponse($this->model->errors(), 'Tidak Berhasil Menambah Data', 404, false);
        }

        // Jika sukses
        return $this->successResponse($data, "Berhasil Menambah Data" . $data['name']);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        $isExist = $this->model->find($id);
        if (!$isExist) {
            return $this->failNotFound("Data dengan Id $id Tidak Ditemukan");
        }

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
            // 'manual' => $this->request->getVar('manual'),
            // 'lisence' => $this->request->getVar('lisence'),
            'user_id' => user_id()
        ];

        if (!$this->model->save($data)) {
            return $this->successResponse($this->model->errors(), 'Tidak Berhasil Merubah Data', 404, false);
        }

        // Jika sukses
        return $this->successResponse($data, "Berhasil Merubah Data" . $data['name']);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            $this->model->delete($id);
            return $this->successResponse($data, "Berhasil Menghapus Data");
        } else {
            return $this->emptyResponse();
        }
    }
}
