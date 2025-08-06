<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Jalankan seeder ke database.
     */
    public function run(): void
    {
        // Buat user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        // Buat user warga
        User::create([
            'name' =>  'Warga',
            'email' => 'warga@gmail.com',
            'password' => Hash::make('warga123'),
        ]);

    }
}
