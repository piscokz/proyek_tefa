<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++){

            \DB::table('contacts')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'title' => $faker->text,
                'message' => $faker->text,
            ]);
        }

    }
}
