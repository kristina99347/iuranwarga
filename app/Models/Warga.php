<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'warga';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'nohp'
    ];

    /**
     * Relasi: Satu warga bisa punya banyak pembayaran
     */
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'warga_id');
    }
}
