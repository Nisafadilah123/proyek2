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
        $transaksis = Transaksi::where([
                            ['user_id', auth()->user()->id],
                            ['status', '!=', 0]
                        ])
                        ->get();

        return view('history.index', compact('transaksis'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi_details = TransaksiDetail::where('transaksi_id', $transaksi->id)->get();

        return view('history.detail', compact('transaksi', 'transaksi_details'));
    }

    public function update($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi_details = TransaksiDetail::where('transaksi_id', $transaksi->id)->get();
        //action update here

        //return view('history.detail', compact('transaksi', 'transaksi_details'));
    }
}
