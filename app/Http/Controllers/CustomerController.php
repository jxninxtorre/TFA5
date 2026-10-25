<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos',   'email' => 'maria@example.com', 'phone' => '0917-111-2222', 'city' => 'Quezon City'],
            ['id' => 2, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com',  'phone' => '0918-222-3333', 'city' => 'Caloocan'],
            ['id' => 3, 'name' => 'Ana Reyes',      'email' => 'ana@example.com',   'phone' => '0919-333-4444', 'city' => 'Manila'],
            ['id' => 4, 'name' => 'Pedro Garcia',   'email' => 'pedro@example.com', 'phone' => '0920-444-5555', 'city' => 'Makati'],
            ['id' => 5, 'name' => 'Liza Mendoza',   'email' => 'liza@example.com',  'phone' => '0921-555-6666', 'city' => 'Pasig'],
        ];

        return view('customers', compact('customers'));
    }
}