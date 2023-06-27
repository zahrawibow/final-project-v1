<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('AdminSeeder');
        $this->call('UserSeeder');
        $this->call('AttendanceSeeder');
        $this->call('AssetSeeder');
        $this->call('LaboratorianPracticumSeeder');
        $this->call('TeamsSeeder');
    }
}
