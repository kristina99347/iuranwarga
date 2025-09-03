<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriIuran extends Model
{
    use HasFactory;

    protected $table = 'kategori_iuran'; // nama tabel
    protected $fillable = ['nama_kategori', 'deskripsi'];
}
