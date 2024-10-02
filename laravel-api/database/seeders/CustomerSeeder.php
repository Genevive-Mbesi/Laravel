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
        
        if (!Customer::where('email', 'customer@gmail.com')->exists()) {
            Customer::create([
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'phone_number' => '123456789',
            ]);
        }


        if (!Customer::where('email', 'mbesi@gmail.com')->exists()) {
            Customer::create([
                'name' => 'mbesi',
                'email' => 'mbesi@gmail.com',
                'phone_number' => '12345',
            ]);
        }
    }
}
