<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // get the faker instance
        $faker = \Faker\Factory::create();

        $password = Hash::make('topal');

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $password,
        ]);

        for($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->password,
                'password' => $password,
            ]);
        }
    }
}
