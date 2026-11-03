<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'staff@gmail.com'],
            [
                'name' => 'Staff',
                'password' => Hash::make('password123'),
                'role' => 'staff',
            ]
        );

        User::updateOrCreate(
            ['email' => 'viewer@gmail.com'],
            [
                'name' => 'Viewer',
                'password' => Hash::make('password123'),
                'role' => 'viewer',
            ]
        );
    }
}