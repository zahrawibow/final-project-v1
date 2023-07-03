<?php

namespace App\Models;

use CodeIgniter\Model;

class AssetModel extends Model
{
    protected $table      = 'assets';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'slug',
        'merk',
        'series',
        'price',
        'count',
        'status',
        'condition',
        'purchase_date',
        'tool_img1',
        'spec',
        'manual',
        'lisence',
        'description',
        'user_id',
        'location',
        'inventory_number'
    ];

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name' => 'required|alpha_numeric_punct|min_length[3]',
        'merk' => 'required|min_length[3]',
        'series' => 'required|min_length[3]',
        'count' => 'required|integer|greater_than[0]',
        'price' => 'permit_empty|greater_than[1000]',
        'status' => 'required',
        'condition' => 'required',
        'purchase_date' => 'required|date_not_future',
        'location' => 'required',
        'inventory_number' => 'permit_empty|min_length[4]'
    ];
    protected $validationMessages   = [
        'name' => [
            'required' => 'Nama aset harus diisi!',
            'alpha_numeric_punct' => 'Nama aset tidak valid',
            'min_length' => 'Nama aset minimum 3 karakter'
        ],
        'merk' => [
            'required' => 'Merk aset harus diisi!',
            'min_length' => 'Merk aset minimum 3 karakter'
        ],
        'series' => [
            'required' => 'Seri aset harus diisi!',
            'min_length' => 'Seri aset minimum 3 karakter'
        ],
        'count' => [
            'required' => 'Jumlah aset harus diisi!',
            'integer' => 'Jumlah aset tidak valid',
            'greater_than' => 'Jumlah aset tidak valid'
        ],
        'status' => [
            'required' => 'Status wajib diisi!'
        ],
        'condition' => [
            'required' => 'Kondisi aset wajib diisi!'
        ],
        'purchase_date' => [
            'required' => 'Tanggal pengadaan wajib diisi!',
            'date_not_future' => 'Tanggal pengadaan tidak valid'
        ],
        'location' => [
            'required' => 'Lokasi aset wajib diisi!'
        ],
        'inventory_number' => [
            'min_length' => 'Nomor Inventaris tidak valid'
        ]
    ];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function getAssetData($slug = false)
    {
        if ($slug == false) {
            return $this->findall();
        }
        return $this->where('slug', $slug)->first();
    }

    public function getAssetForLoans()
    {
        return $this->where('status !=', 'Dipinjam')->findAll();
    }
}
