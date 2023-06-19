<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamsModel extends Model
{
    protected $table      = 'teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'team', 'lesson'];

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = false;
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
    public function getTeamsData($id = false)
    {
        if ($id == false) {
            return $this->findall();
        }
        return $this->where('id', $id)->first();
    }
}
