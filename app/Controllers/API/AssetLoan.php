<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\LoansModel;
use CodeIgniter\RESTful\ResourceController;

class AssetLoan extends ResourceController
{
    use CustomAPIResponse;

    protected $db;
    protected $model;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        // Query Builder untuk tabel asset_loans
        // $this->db = \Config\Database::connect()->table('asset_loans');
        $this->model = new LoansModel();
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

        // Ambil data dari database dan relasi dengan users & assets
        $data = $this->model->allWithRelatedData($limit ?? $this->limit, $offset ?? $this->offset);

        // Jika Data kosong
        if (!$data) :
            return $this->emptyResponse();
        endif;

        return $this->successResponse($data, 'Semua data peminjaman');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = $this->model->singleWithRelatedData($id);

        if (!$data) :
            return $this->emptyResponse();
        endif;
        return $this->successResponse($data, "Data ID-$id peminjaman");
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
