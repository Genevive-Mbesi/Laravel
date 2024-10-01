<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Seed the application's customers.
     */
    public function run(): void
    {
        // Create a customer record
        Customer::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'phone_number' => '123456789',
        ]);
    }
}
