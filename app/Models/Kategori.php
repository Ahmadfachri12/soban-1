<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
    ];

    public function layananJasa()
    {
        return $this->hasMany(LayananJasa::class);
    }
}
