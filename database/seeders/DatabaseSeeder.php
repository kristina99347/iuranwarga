<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // ✅ Seed data users
        DB::table('users')->insert([
            [
                'name' => 'Admin Sistem',
                'username' => 'admin',
                'password' => bcrypt('123'),
                'nohp' => '081234567890',
                'address' => 'Jl. Admin Raya',
                'level' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Warga Biasa',
                'username' => 'warga1',
                'password' => bcrypt('123'),
                'nohp' => '082345678901',
                'address' => 'Jl. Warga 1',
                'level' => 'warga',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);

        // ✅ Seed data officers
        DB::table('officers')->insert([
            'iduser' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // ✅ Seed data dues_categories
        // DB::table('dues_categories')->insert([
        //     [
        //         'period' => 'bulanan',
        //         'nominal' => 50000,
        //         'status' => 'aktif',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'period' => 'tahunan',
        //         'nominal' => 600000,
        //         'status' => 'aktif',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ]
        // ]);

        // ✅ Seed data dues_members
        // DB::table('dues_members')->insert([
        //     'iduser' => 2,
        //     'idduescategory' => 1,
        //     'created_at' => $now,
        //     'updated_at' => $now,
        // ]);

        // // ✅ Seed data payments
        // DB::table('payments')->insert([
        //     'iduser' => 2,
        //     'period' => '2025-08',
        //     'nominal' => 50000,
        //     'petugas' => 'admin',
        //     'created_at' => $now,
        //     'updated_at' => $now,
        // ]);
    }
}
