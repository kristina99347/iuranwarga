<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        // ✅ Seed data kategori_iuran
        DB::table('kategori_iuran')->insert([
            [
                'nama_kategori' => 'Iuran Kebersihan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kategori' => 'Iuran Keamanan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kategori' => 'Iuran Pembangunan',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);

        // ✅ (Opsional) Seed data iuran
        // DB::table('iuran')->insert([
        //     'iduser' => 2,
        //     'idkategori' => 1,
        //     'jumlah' => 50000,
        //     'periode' => '2025-09',
        //     'status' => 'belum bayar',
        //     'created_at' => $now,
        //     'updated_at' => $now,
        // ]);
    }
}
