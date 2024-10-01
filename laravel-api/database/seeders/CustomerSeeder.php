<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the customer already exists
        if (!Customer::where('email', 'customer@gmail.com')->exists()) {
            // If the customer doesn't exist, create it
            Customer::create([
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'phone_number' => '123456789',
            ]);
        }

        // Add more customers as needed, following the same pattern
    }
}
