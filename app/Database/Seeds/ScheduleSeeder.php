<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        // Insert Data to Schedule
        for ($i = 1; $i < 5; $i++) :
            $this->db->table('schedule')->insert([
                'laboratorian_id' => $faker->numberBetween(1, 4),
                'activity_name' => $faker->sentence(3),
                'date' => $faker->date(),
                'start_time' => $faker->time(),
                'end_time' => $faker->time(),
                'activity_location' => $faker->city(),
                'activity_status' => 'Belum Terlaksana'
            ]);
        endfor;
    }
}
