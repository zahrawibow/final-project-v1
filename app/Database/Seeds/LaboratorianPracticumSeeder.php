<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaboratorianPracticumSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        // Insert Data to Laboratorian
        for ($i = 1; $i < 5; $i++) :
            $this->db->table('laboratorians')->insert([
                'user_id' => $i
            ]);
        endfor;

        // Insert data to practicums
        for ($i = 1; $i < 4; $i++) :
            $this->db->table('practicums')->insert([
                'asset_id' => $i,
                'user_id' => 1,
                'laboratorian_id' => $faker->numberBetween(1, 4),
                'title' => $faker->sentence(3),
                'team' => 'A',
                'description' => $faker->sentences(5, true),
                'schedule' => $faker->date(),
                'time' => $faker->time(),
                'prac_location' => $faker->city(),
                'prac_status' => 'Belum Terlaksana'
            ]);
        endfor;
    }
}
