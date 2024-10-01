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
        
        if (!User::where('email', 'gennymbesi@gmail.com')->exists()) {
            // If the user doesn't exist, create it
            User::create([
                'name' => 'user',
                'email' => 'gennymbesi@gmail.com',
                'password' => bcrypt('password123'),
            ]);
        }

        // Call the CustomerSeeder to seed customers
        $this->call(CustomerSeeder::class);
    }
}
