<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index()
    {
        $produks = Produk::paginate(20);
        return view('awal', compact('produks'));
    }
}
