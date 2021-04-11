@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('home')}}" class="btn btn-success"><i class="fa fa-arrow-left"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$produk->nama_produk}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('storage/uploads')}}/{{$produk->gambar}}" class="rounded mx-auto d-block"
                                width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{$produk->nama_produk}}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td> Rp. {{number_format($produk->harga)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{number_format($produk->stok)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$produk->keterangan}}</td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{url('transaksi')}}/{{$produk->id}}" method="POST">
                                                @csrf
                                                <input type="text" name="jumlah_transaksi" class="form-control"
                                                    required="">
                                                <button type="submit" class="btn btn-success mt-2"><i
                                                        class="fa fa-shopping-cart"></i> Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection