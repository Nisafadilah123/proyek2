<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function transaksi_detail()
    {
        return $this->hasMany('App\Models\TransaksiDetail', 'transaksi_id', 'id');
    }
}
