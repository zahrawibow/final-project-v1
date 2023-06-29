<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\AssetModel;
use CodeIgniter\RESTful\ResourceController;

class Asset extends ResourceController
{
    use CustomAPIResponse;

    protected $assetModel;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        $this->assetModel = new AssetModel();
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

        $data = $this->assetModel->findAll($limit ?? $this->limit, $offset ?? $this->offset);

        return $this->successResponse($data, 'Semua data aset');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        // Cari di database
        $data = $this->assetModel->find($id);

        // Jika ID tidak ditemukan
        if (!$data) :
            return $this->emptyResponse();
        endif;

        // Jika sukses
        return $this->successResponse($data, "Data aset ID-$id");
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
