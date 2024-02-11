<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // Crear usuarios de ejemplo
            User::create([
                'name' => 'Adam',
                'email' => 'adam@example.com',
                'password' => Hash::make('password123'),
            ]);

            User::create([
                'name' => 'Sam',
                'email' => 'sam@example.com',
                'password' => Hash::make('password123'),
            ]);

        }
    }
}
