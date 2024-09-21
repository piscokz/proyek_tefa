<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){

            \DB::table('siswa')->insert([
                'id' => $faker->randomNumber(), // Menghasilkan angka acak, cocok untuk ID
                'nama' => $faker->name,         // Properti Faker untuk nama
                'email' => $faker->email,       // Properti Faker untuk email
                'password' => bcrypt($faker->password), // Hashing password dengan bcrypt
            ]);
            
        }
    }
}
