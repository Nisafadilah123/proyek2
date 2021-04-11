@extends('layouts.admin')
@section('tittle', 'Add Produk')
@section('contentAdmin')

<form action="{{ route('adminproduk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                {{-- <div class="form-group">

                    <label for="nama_kategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="col-md-6">
                        <select name="nama_kategori" id="nama_kategori" class="form-control">
                            <option value="0">--- Pilih Nama Kategori ---</option>
                            <option value="1">Minuman dan Makanan</option>
                            <option value="2">Industri Olahan</option>
                            <option value="3">Hewan</option>
                            <option value="4">Jasa</option>
                            <option value="5">Pulsa</option>
                        </select>
                    </div>
                </div> --}}

                <div class="form-group">
                    <label> Nama Kategori</label>
                    <input name="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}">
                    <div class="text-danger">
                        @error('nama_kategori')
                        {{ $message }}
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label> Nama Produk</label>
                    <input name="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
                    <div class="text-danger">
                        @error('nama_produk')
                        {{ $message }}
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label> Stok</label>
                    <input name="stok" class="form-control" value="{{ old('stok') }}">
                    <div class="text-danger">
                        @error('stok')
                        {{ $message }}
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label> Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga') }}">
                    <div class="text-danger">
                        @error('harga')
                        {{ $message }}
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label> Keterangan</label>
                    <input name="keterangan" class="form-control" value="{{ old('keterangan') }}">
                    <div class="text-danger">
                        @error('keterangan')
                        {{ $message }}
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label> Foto Produk</label>
                    <input type="file" name="gambar" class="form-control" @error('gambar') is-invalid @enderror>
                    <div class="text-danger">
                        @error('gambar')
                        {{ $message }}
                        @enderror

                    </div>
                </div>
                <div class="form-group">

                    <button class="btn btn-primary btn-sm">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
