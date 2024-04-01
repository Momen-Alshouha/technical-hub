<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'user' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Fatima Ali',
                'email' => 'fatima@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Youssef Hassan',
                'email' => 'youssef@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Layla Omar',
                'email' => 'layla@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Hoda Ibrahim',
                'email' => 'hoda@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Nour Ali',
                'email' => 'nour@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Khaled Ahmed',
                'email' => 'khaled@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Mariam Saleh',
                'email' => 'mariam@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Sara Hassan',
                'email' => 'sara@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Mohammed Omar',
                'email' => 'mohammed@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
