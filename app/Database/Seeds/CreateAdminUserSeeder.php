<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateAdminUserSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('AdminSeeder');
        $this->call('UserSeeder');
    }
}
