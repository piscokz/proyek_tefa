<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'title' => 'Question about LENSA',
            'message' => 'Can you tell me more about the features?',
        ]);
    }
}


