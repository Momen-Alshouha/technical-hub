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
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'is_admin' => false,
                'age' => 25,
                'gender' => 'male',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '123456789',
                'address' => '123 Main Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
                'age' => 30,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'phone_number' => '987654321',
                'address' => '456 Elm Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
                'age' => 35,
                'gender' => 'male',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '555555555',
                'address' => '789 Oak Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Fatima Ali',
                'email' => 'fatima@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 27,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'phone_number' => '333333333',
                'address' => '987 Pine Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Youssef Hassan',
                'email' => 'youssef@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 29,
                'gender' => 'male',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'phone_number' => '222222222',
                'address' => '654 Oak Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Layla Omar',
                'email' => 'layla@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 32,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '444444444',
                'address' => '321 Elm Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Hoda Ibrahim',
                'email' => 'hoda@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 33,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'phone_number' => '666666666',
                'address' => '753 Maple Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Nour Ali',
                'email' => 'nour@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 26,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '777777777',
                'address' => '852 Cedar Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Khaled Ahmed',
                'email' => 'khaled@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 31,
                'gender' => 'male',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'phone_number' => '888888888',
                'address' => '963 Walnut Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Mariam Saleh',
                'email' => 'mariam@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 28,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '999999999',
                'address' => '159 Oak Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Sara Hassan',
                'email' => 'sara@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 24,
                'gender' => 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'phone_number' => '111111111',
                'address' => '258 Maple Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
            [
                'name' => 'Mohammed Omar',
                'email' => 'mohammed@example.com',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'age' => 33,
                'gender' => 'male',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'phone_number' => '222222222',
                'address' => '369 Pine Street, City, Country',
                'profile_pic' => 'avatar.png',
            ],
        ];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
