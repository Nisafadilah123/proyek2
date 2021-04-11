@extends('layouts.admin')

@section('contentAdmin')
<div class="ml-4" style="width: 500px;">
    <table class="table table-borderless table-reponsive ">
        <tr>
            <th width="10px">Nama Produk</th>
            <th width="5px">:</th>
            <th width="150px">{{ $produk->nama_produk }}</th>
        </tr>
        <tr>
            <th width="10px">Stok</th>
            <th width="5px">:</th>
            <th width="150px">{{ $produk->stok }}</th>
        </tr>
        <tr>
            <th width="10px">Harga</th>
            <th width="5px">:</th>
            <th width="150px">{{ $produk->harga }}</th>
        </tr>
        <tr>
            <th width="10px">Foto Produk</th>
            <th width="5px">:</th>
            <th><img src="{{ Storage::url('public/uploads/').$produk->gambar }}" width="300px"></th>
        </tr>
        <tr>
            <br><br>

            <th>
                <a href="/adminproduk" class="btn btn-success btn-sm">Kembali</a>
            </th>

        </tr>

    </table>
</div>

@endsection