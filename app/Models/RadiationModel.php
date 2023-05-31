<?php

namespace App\Models;

use CodeIgniter\Model;

class RadiationModel extends Model
{
    protected $table      = 'radiation_history';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'asset_id', 'user_id', 'radioisotope', 'laboratorian_id', 'activity', 'radiation', 'start_time', 'end_time', 'created_at'];

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
    public function getRadiationData()
    {
        return $this->findAll();
    }
}
