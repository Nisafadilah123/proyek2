<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\TransaksiDetail;
use Auth;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transaksis = Transaksi::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

        return view('history.index', compact('transaksis'));
    }

    public function detail($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        $transaksi_details = TransaksiDetail::where('transaksi_id', $transaksi->id)->get();

        return view('history.detail', compact('transaksi', 'transaksi_details'));
    }
}
