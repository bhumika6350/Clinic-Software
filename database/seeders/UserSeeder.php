<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
            ]
        );

        $admin->assignRole('Super Admin');

        $doctor = User::firstOrCreate(
            ['email' => 'doctor@gmail.com'],
            [
                'name' => 'Doctor',
                'password' => Hash::make('password123'),
            ]
        );

        $doctor->assignRole('Doctor');
    }
}