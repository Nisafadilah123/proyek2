<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $produks = Produk::all();

        //return response()->json($produks);
        return view('adminproduk.index', compact('produks'));
    }
    /**
     * create
     *
     * @return void
     */

    public function create()
    {
        return view('adminproduk.create');
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/uploads', $gambar->hashName());

        $produk = Produk::create([
            'nama_kategori' => $request->nama_kategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $gambar->hashName(),
            'keterangan' => $request->keterangan
        ]);
        if ($produk) {
            return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            return redirect()->route('adminproduk.index')->with(['error' => 'Data Gagal di simpan']);
        }
    }
    /**
     * edit
     *
     * @param  mixed
     * @return void
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('adminproduk.edit', compact('produk'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $produk
     * @return void
     */
    public function update(Request $request, $id)
    {
        $old_image_name = $request->hidden_image;
        $gambar = $request->file('gambar');
        if ($gambar != '') {
            $this->validate($request, [
                'nama_kategori' => 'required',
                'nama_produk' => 'required',
                'stok' => 'required',
                'harga' => 'required',
                'keterangan' => 'required',
                'gambar' => 'required'


            ]);

            $image_name = $old_image_name;
            $gambar->storeAs('public/uploads', $gambar->hashName());
        } else {
            $this->validate($request, [
                'nama_kategori' => 'required',
                'nama_produk' => 'required',
                'stok' => 'required',
                'harga' => 'required',
                'keterangan' => 'required',

            ]);

            $image_name = $old_image_name;
        }

        $data_array = array(
            'nama_kategori' => $request->nama_kategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $gambar->hashName(),
            'keterangan' => $request->keterangan
        );

        //$gambar->storeAs('public/uploads', $gambar->hashName());
        $produk = Produk::find($id);
        Storage::disk('local')->delete('public/uploads/' . $produk->$gambar);
        $produk->update($data_array);


        return redirect()->route('adminproduk.index')->with('Success', 'Produk berhasil di update');

        //$produk = Produk::findOrFail($produk->id);

        /*$gambar = $request->file('gambar');
        if ($gambar == "") {
            $produk->update([
                'nama_kategori' => $request->nama_kategori,
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,
                'gambar' => $gambar->hashName()
            ]);
        } else {


            //upload file baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/uploads', $gambar->hashName());

            $id->update([
                'nama_kategori' => $request->id_kategori,
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'gambar' => $gambar->hashName(),
                'keterangan' => $request->keterangan
            ]);
        }

        if ($produk) {
            //redirect dengan pesan sukses
            return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('adminproduk.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
        */
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        if ($produk) {
            return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil dihapus']);
        } else {
            return redirect()->route('adminproduk.index')->with(['error' => 'Data Gagal dihapus']);
        }
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        return view('adminproduk.detail', compact('produk'));
    }
}