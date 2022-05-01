<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goals;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goals::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Goals::create([
                'title' => $faker->sentence(),
                'description' => $faker->paragraph(),
            ]);
        }
    }
}
