@extends('layouts.admin')
@section('tittle', 'Halaman Edit Produk')
@section('contentAdmin')

<form action="{{ route('adminproduk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">


    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label> Nama Kategori</label>
                    <input name="nama_kategori" class="form-control" value="{{ $produk->nama_kategori }}">
                    <div class="text-danger">
                        @error('nama_kategori')
                        {{ $message }}
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label> Nama Produk</label>
                    <input name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}">
                    <div class="text-danger">
                        @error('nama_produk')
                        {{ $message }}
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label> Stok</label>
                    <input name="stok" class="form-control" value="{{ $produk->stok }}">
                    <div class="text-danger">
                        @error('stok')
                        {{ $message }}
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label> Harga</label>
                    <input name="harga" class="form-control" value="{{ $produk->harga }}">
                    <div class="text-danger">
                        @error('harga')
                        {{ $message }}
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label> Keterangan</label>
                    <input name="keterangan" class="form-control" value="{{ $produk->keterangan }}">
                    <div class="text-danger">
                        @error('keterangan')
                        {{ $message }}
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-4">
                        <img src="{{ Storage::url('public/uploads/').$produk->gambar }}" width="150px">
                    </div>

                    <div class="form-group">
                        <label> Ganti Foto Produk</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>


                </div>

                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>


            </div>
        </div>
    </div>
</form>


@endsection
