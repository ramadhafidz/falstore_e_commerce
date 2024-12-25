<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'nama_toko',
        'foto_produk',
        'kategori_produk',
        'deskripsi',
        'informasi_tambahan',
    ];

    public function getFotoProdukUrlAttribute()
    {
        $fotoProduk = json_decode($this->foto_produk, true);
        if (is_array($fotoProduk)) {
            return array_map(function ($foto) {
                return asset("images/produk/{$foto}");
            }, $fotoProduk);
        }

        return [];
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}