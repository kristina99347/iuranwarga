<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga'; // Pastikan table ini benar

    // Tambahkan semua kolom yang bisa diisi
    protected $fillable = ['nama', 'nik', 'alamat', 'nohp'];
}
