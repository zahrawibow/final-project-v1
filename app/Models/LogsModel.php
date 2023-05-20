<?php

namespace App\Models;

use CodeIgniter\Model;

class LogsModel extends Model
{
    protected $table      = 'logs_assets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'aset_id', 'user_id', 'purpose', 'laboratorian', 'start_time', 'end_time', 'currant_condition'];

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
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
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
}
