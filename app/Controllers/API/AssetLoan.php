<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\LoansModel;
use CodeIgniter\RESTful\ResourceController;

class AssetLoan extends ResourceController
{
    use CustomAPIResponse;

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

        return $this->successResponse($data, 'Semua Data Peminjaman');
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
        return $this->successResponse($data, "Data Pinjaman dengan ID $id");
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
            'purpose' => $this->request->getVar('purpose'),
            'loan_time' => $this->request->getVar('loan_time'),
            'status' => $this->request->getVar('status'),
        ];

        if (!$this->model->save($data)) {
            return $this->successResponse($this->model->errors(), 'Tidak Berhasil Menambah', 404, false);
        }

        // Jika sukses
        return $this->successResponse($data, "Berhasil Menambah Data" . $data['name']);
    }
}
