<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09123456789'
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09234567890'
            ],
            [
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09345678901'
            ],
            [
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09456789012'
            ],
            [
                'name' => 'Mark Flores',
                'email' => 'mark@example.com',
                'phone' => '09567890123'
            ],
        ];

        return view('customers', compact('customers'));
    }
}