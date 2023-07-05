<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table      = 'schedule';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'activity_name',
        'laboratorian_id',
        'date',
        'start_time',
        'end_time',
        'activity_location',
        'activity_status',
        'description',
    ];

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = false;
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'activity_name' => 'required|alpha_numeric_space|min_length[4]',
        'date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'activity_location' => 'required|min_length[4]',
        'activity_status' => 'required',
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

    public function getScheduleData($id = false)
    {
        if ($id == false) {
            return $this->findall();
        }
        return $this->where('id', $id)->first();
    }
}
