<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $conditions = [
            'baik',
            'rusak ringan',
            'rusak berat'
        ];

        $status = [
            'digunakan',
            'tidak digunakan'
        ];

        for ($i = 0; $i < 15; $i++) :
            $data = [
                'name' => $faker->city() . ' ' . $faker->colorName(),
                'slug' => $faker->slug(3),
                'inventory_number' => $faker->buildingNumber(),
                'merk' => $faker->colorName(),
                'series' => $faker->streetName(),
                'count' => $faker->numberBetween(1, 10),
                'condition' => $conditions[$faker->numberBetween(0, 2)],
                'used_status' => $status[$faker->numberBetween(0, 1)],
                'location' => $faker->word(),
                'description' => $faker->sentence(),
                'purchase_date' => $faker->date(),
                'status' => 'Tersedia',
                'price' => $faker->numberBetween(1, 3000) * 1000,
                'user_id' => 1,
            ];

            $this->db->table('assets')->insert($data);
        endfor;
    }
}
