<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyediaJasa extends Model
{
    use HasFactory;

    protected $table = 'penyedia_jasa';

    protected $fillable = [
        'nama',
        'alamat',
        'noTelepon',
        'rating',
        'email',
    ];

    public function layananJasa()
    {
        return $this->hasMany(LayananJasa::class);
    }
}
