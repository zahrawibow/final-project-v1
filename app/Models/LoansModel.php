<?php

namespace App\Models;

use CodeIgniter\Model;

class LoansModel extends Model
{
    protected $table      = 'asset_loans';
    protected $primaryKey = 'id';
    protected $allowedFields = ['asset_id', 'user_id', 'purpose', 'loan_time', 'permission_tax', 'current_condition', 'status', 'validation', 'validator', 'return_time'];

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
    public function getLoansData()
    {
        return $this->findAll();
    }
}
