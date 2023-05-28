<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // data admin
        $data = [
            'username' => 'admin',
            'fullname' => 'Admin Lab',
            'major' => 4,
            'identifier' => 1,
            'identity_number' => '021900032',
            'email' => 'admin@mail.com',
            'active' => 1,
            'password_hash' => password_hash(base64_encode(hash('sha384', 'password', true)), PASSWORD_DEFAULT),
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];

        $this->db->table('users')->insert($data);

        // Data groups
        $group = [
            [
                'name' => 'admin',
                'description' => 'Mengelola situs dan laboratorium'
            ],
            [
                'name' => 'user',
                'description' => 'Pengguna biasa, mahasiswa/dosen'
            ]
        ];

        $this->db->table('auth_groups')->insertBatch($group);

        // Assign user to groups
        $data = [
            'user_id' => 1,
            'group_id' => 1
        ];
        $this->db->table('auth_groups_users')->insert($data);
    }
}
