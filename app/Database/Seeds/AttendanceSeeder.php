<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 50; $i++) :
            $data = [
                'user_id' => $faker->numberBetween(1, 25),
                'activity' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'description' => $faker->sentence(),
            ];

            $this->db->table('attendances')->insert($data);
        endfor;
    }
}
