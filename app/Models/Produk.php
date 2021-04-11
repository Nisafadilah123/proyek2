<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama_kategori',
        'nama_produk',
        'stok',
        'harga',
        'keterangan',
        'gambar'
    ];

    public function transaksi_detail()
    {
        return $this->hasMany('App\TransaksiDetail', 'produk_id', 'id');
    }
}
