<?php

namespace App\Http\Controllers;

use App\Models\Customer; // Ensure you have this model
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Add this line

class CustomerController extends Controller
{
    public function index()
    {
        // Fetch and return customers
        return Customer::all();
    }
}
