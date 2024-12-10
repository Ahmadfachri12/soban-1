<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'user_id',
        'layanan_jasa_id',
        'waktuPemesanan',
        'statusPembayaran',
        'totalHarga',
        'statusPesanan',
        'ulasan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function layananJasa()
    {
        return $this->belongsTo(LayananJasa::class);
    }
}
