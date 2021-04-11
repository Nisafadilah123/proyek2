<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'produk_id', 'id');
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi', 'transaksi_id', 'id');
    }
}
