<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Alert;
use App\Models\User;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $produk = Produk::where('id', $id)->first();

        return view('transaksi.index', compact('produk'));
    }
    public function detail($id)
    {
        $produk = Produk::where('id', $id)->first();

        return view('transaksi.detail', compact('produk'));
    }

    public function transaksi(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->first();
        $tanggal = Carbon::now();

        //cek validasi
        $cek_transaksi = Transaksi::where([['user_id', auth()->user()->id],['status', 0]])->first();
        //simpan ke database transaksi
        if (empty($cek_transaksi)) {
            //simpan ke data base transaksi
            $transaksi = new Transaksi;
            $transaksi->user_id = auth()->user()->id;
            $transaksi->tanggal = $tanggal;
            $transaksi->status = 0;
            $transaksi->kode = mt_rand(100, 999);
            $transaksi->jumlah_harga = 0;
            $transaksi->save();
        }


        //simpan ke database transaksi detail\
        $transaksi_baru = Transaksi::where([['user_id', auth()->user()->id],['status', 0]])->first();

        //cek transaksi detail
        $cek_transaksi_detail = TransaksiDetail::where([
                                    ['produk_id', $produk->id],
                                    ['transaksi_id', $transaksi_baru->id]
                                ])->first();

        if (empty($cek_transaksi_detail)) {

            $transaksi_detail = new TransaksiDetail;
            $transaksi_detail->produk_id = $produk->id;
            $transaksi_detail->transaksi_id = $transaksi_baru->id;
            $transaksi_detail->jumlah = $request->jumlah_transaksi;
            $transaksi_detail->jumlah_harga = $produk->harga * $request->jumlah_transaksi;
            $transaksi_detail->save();
        } else {
            $transaksi_detail = TransaksiDetail::where('produk_id', $produk->id)->where('transaksi_id', $transaksi_baru->id)->first();

            $transaksi_detail->jumlah = $transaksi_detail->jumlah + $request->jumlah_transaksi;

            //harga sekarang
            $harga_transaksi_detail_baru = $produk->harga * $request->jumlah_transaksi;
            $transaksi_detail->jumlah_harga = $transaksi_detail->jumlah_harga + $harga_transaksi_detail_baru;
            $transaksi_detail->update();
        }
        //jumlah total
        $transaksi = Transaksi::where([['user_id', auth()->user()->id],['status', 0]])->first();
        $transaksi->jumlah_harga = $transaksi->jumlah_harga + $produk->harga * $request->jumlah_transaksi;
        $transaksi->update();



        alert()->success('Pesanan Sukses Masuk Keranjang', 'Success');
        return redirect('check-out');
    }
    public function check_out($user_id)
    {
        $user_id = auth()->user()->id;
        $transaksi = Transaksi::where([['user_id', $user_id],['status', 0]])->first();
        $transaksi_details = [];
        if (!empty($transaksi)) {
            $transaksi_details = TransaksiDetail::where('transaksi_id', $transaksi->id)->get();
        }

        return view('transaksi.check_out', compact('transaksi', 'transaksi_details'));
    }

    public function delete($id)
    {
        $transaksi_detail = TransaksiDetail::where('id', $id)->first();

        $transaksi = Transaksi::where('id', $transaksi_detail->transaksi_id)->first();
        $transaksi->jumlah_harga = $transaksi->jumlah_harga - $transaksi_detail->jumlah_harga;
        $transaksi->update();


        $transaksi_detail->delete();

        Alert()->error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }


    public function konfirmasi()
    {
        $user = User::where('id', auth()->user()->id)->first();

        if (empty($user->alamat)) {
            Alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        if (empty($user->nohp)) {
            Alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $transaksi = Transaksi::where([['user_id', auth()->user()->id],['status', 0]])->first();
        $transaksi_id = $transaksi->id;
        $transaksi->status = 1;
        $transaksi->update();

        $transaksi_details = TransaksiDetail::where('transaksi_id', $transaksi_id)->get();
        foreach ($transaksi_details as $transaksi_detail) {
            $produk = Produk::where('id', $transaksi_detail->produk_id)->first();
            $produk->stok = $produk->stok - $transaksi_detail->jumlah;
            $produk->update();
        }



        Alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/' . $transaksi_id);
    }
}