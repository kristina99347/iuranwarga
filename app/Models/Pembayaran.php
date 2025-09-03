<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = [
        'warga_id', 'kategori_iuran_id', 'tanggal_bayar',
        'jumlah', 'metode_bayar', 'bukti_bayar'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Iuran::class, 'kategori_iuran_id');
    }
}

