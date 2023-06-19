<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeamsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        // Insert data to practicums
        for ($i = 1; $i < 4; $i++) :
            $this->db->table('teams')->insert([
                'semester' => $faker->numberBetween(1, 8),
                'lesson' => $faker->sentence(3),
                'team' => $faker->randomLetter()
            ]);
        endfor;

        // $teamId = $this->request->getVar('id');

        // $dataUser = $this->request->getVar('id_user');

        // $this->db->table('users')->whereIn('id', $dataUser)->update([
        //     'team_id' => $teamId
        // ]);
    }
}
