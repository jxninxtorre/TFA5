<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin01',   'email' => 'admin@example.com',   'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'jtorre',    'email' => 'jtorre@example.com',  'role' => 'Manager',       'status' => 'Active'],
            ['id' => 3, 'username' => 'cashier01', 'email' => 'cashier@example.com', 'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 4, 'username' => 'staff02',   'email' => 'staff02@example.com', 'role' => 'Staff',         'status' => 'Inactive'],
            ['id' => 5, 'username' => 'guest05',   'email' => 'guest@example.com',   'role' => 'Viewer',        'status' => 'Suspended'],
        ];

        return view('users', compact('users'));
    }
}