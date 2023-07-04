<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\LogsModel;
use CodeIgniter\RESTful\ResourceController;

class Asset extends ResourceController
{
    use CustomAPIResponse;

    protected $model;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        $this->model = new LogsModel();
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
        $data = [
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'purpose' => $this->request->getVar('purpose'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'currant_condition' => $this->request->getVar('currant_condition')
        ];

        if (!$this->model->save($data)) {
            return $this->successResponse($this->model->errors(), 'Tidak Berhasil Menambah Data', 404, false);
        }

        // Jika sukses
        return $this->successResponse($data, "Berhasil Menambah Data" . $data['name']);
    }
}
