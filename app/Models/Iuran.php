<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $table = 'iuran'; // sesuaikan jika nama tabelmu bukan 'iuran'
    protected $fillable = ['warga_id', 'tanggal', 'jumlah', 'keterangan'];
}
