<?php

namespace App\Models;

use CodeIgniter\Model;

class LogsModel extends Model
{
    protected $table      = 'asset_logs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'asset_id', 'user_id', 'purpose', 'start_time', 'end_time', 'currant_condition'];

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    protected $updatedField  = false;
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'asset_id' => 'required',
        'purpose' => 'required',
        'start_time' => 'required|rational_start_time',
        'end_time' => 'required|rational_end_time[start_time]',
        'currant_condition' => 'required|min_lenght[4]'
    ];
    protected $validationMessages   = [
        'asset_id' => [
            'required' => 'Aset harus dipilih',
        ],
        'purpose' => [
            'required' => 'Keperluan harus diisi',
        ],
        'start_time' => [
            'required' => 'Waktu mulai harus diisi',
            'rational_start_time' => 'Waktu mulai tidak valid'
        ],
        'end_time' => [
            'required' => 'Waktu selesai harus diisi',
            'rational_end_time' => 'Waktu selesai tidak valid'
        ],
        'currant_condition' => [
            'required' => 'Kondisi saat ini harus diisi',
            'min_length' => 'Kondisi saat ini tidak valid'
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
    public function getLogsData()
    {
        return $this->findAll();
    }
}
