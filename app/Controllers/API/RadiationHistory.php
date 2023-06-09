<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\RadiationModel;
use CodeIgniter\RESTful\ResourceController;

class RadiationHistory extends ResourceController
{
    use CustomAPIResponse;

    protected $model;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        $this->model = new RadiationModel();
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

        if (!$data) :
            return $this->emptyResponse();
        endif;

        return $this->successResponse($data, 'Semua Data Penerimaan Dosis Radiasi');
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
        return $this->successResponse($data, "Data Kunjungan dengan ID-$id");
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
            'activity' => $this->request->getVar('activity'),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'radioisotope' => $this->request->getVar('radioisotope'),
            'radiation' => $this->request->getVar('radiation')
        ];

        if (!$this->model->save($data)) {
            return $this->successResponse($this->model->errors(), 'Tidak Berhasil Menambah Data', 404, false);
        }

        // Jika sukses
        return $this->successResponse($data, "Berhasil Menambah Data" . $data['name']);
    }
}
