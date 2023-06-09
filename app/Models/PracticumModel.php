<?php

namespace App\Models;

use CodeIgniter\Model;

class PracticumModel extends Model
{
    protected $table      = 'practicums';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'asset_id',
        'laboratorian_id',
        'title',
        'module',
        'schedule',
        'time',
        'team',
        'user_id',
        'description',
        'prac_status',
        'prac_location'
    ];

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
        'title' => 'required|alpha_numeric_space|min_length[4]',
        'team' => 'required|alpha_numeric',
        'schedule' => 'required',
        'time' => 'required',
        'prac_location' => 'required|min_length[4]',
        'prac_status' => 'required',
        'description' => 'permit_empty|min_length[10]'
    ];
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

    // public function getPracticumData()
    // {
    //     return $this->findAll();
    // }

    public function getPracticumData($id = false)
    {
        if ($id == false) {
            return $this->findall();
        }
        return $this->where('id', $id)->first();
    }
}
