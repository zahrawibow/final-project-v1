<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

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
            'updated_at' => Time::now(),
            'description' => $faker->paragraph(4)
        ];

        $this->db->table('users')->insert($data);

        $data = [
            'user_id' => 2,
            'group_id' => 2
        ];
        $this->db->table('auth_groups_users')->insert($data);

        // Membuat data dummy
        for ($i = 0; $i < 25; $i++) :
            $data = [
                'username' => $faker->userName(),
                'fullname' => $faker->name(),
                'major' => $faker->numberBetween(1, 4),
                'identifier' => $faker->numberBetween(1, 2),
                'identity_number' => $faker->postcode() . $faker->postcode(),
                'email' => $faker->email(),
                'active' => 1,
                'password_hash' => password_hash(base64_encode(hash('sha384', 'password', true)), PASSWORD_DEFAULT),
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta'),
                'description' => $faker->paragraph(4)
            ];

            $user = $this->db->table('users')->insert($data);
            $role = [
                'user_id' => $user,
                'group_id' => 2
            ];
            $this->db->table('auth_groups_users')->insert($role);
        endfor;
    }
}
