<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ],
            [
                'name' => 'Cashier One',
                'email' => 'cashier1@example.com',
                'role' => 'Cashier'
            ],
            [
                'name' => 'Cashier Two',
                'email' => 'cashier2@example.com',
                'role' => 'Cashier'
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'role' => 'Manager'
            ],
            [
                'name' => 'Staff User',
                'email' => 'staff@example.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', compact('users'));
    }
}