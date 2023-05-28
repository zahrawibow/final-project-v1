<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'bomsiwor',
            'fullname' => 'Bomanarakasura',
            'major' => 2,
            'identifier' => 1,
            'identity_number' => '021900009',
            'email' => 'bomsiwor@gmail.com',
            'active' => 1,
            'password_hash' => password_hash(base64_encode(hash('sha384', 'brek3le5758', true)), PASSWORD_DEFAULT),
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];

        $this->db->table('users')->insert($data);
    }
}
