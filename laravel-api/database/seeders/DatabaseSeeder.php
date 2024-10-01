<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user with the provided email and password
        User::create([
            'name' => 'user',
            'email' => 'gennymbesi@gmail.com',
            'password' => bcrypt('password123'), 
        ]);
    }
}
