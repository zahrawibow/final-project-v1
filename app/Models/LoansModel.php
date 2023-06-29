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

    public function allWithRelatedData($limit = null, $offset = null)
    {
        return $this->select('asset_loans.*,users.fullname as user_fullname,assets.name as asset_name,assets.inventory_number')
            ->join('users', 'users.id = asset_loans.user_id')
            ->join('assets', 'assets.id=asset_loans.asset_id')
            ->get($limit, $offset)
            ->getResultArray();
    }

    public function singleWithRelatedData($id)
    {
        return $this->select('asset_loans.*,users.fullname as user_fullname,assets.name as asset_name,assets.inventory_number')
            ->join('users', 'users.id = asset_loans.user_id')
            ->join('assets', 'assets.id=asset_loans.asset_id')
            ->where('asset_loans.id', $id)
            ->get()
            ->getResultArray();
    }
}
