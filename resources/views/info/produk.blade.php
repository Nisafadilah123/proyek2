@extends('layouts.app')

@section('content')

@foreach($produks as $produk)
    <div class="d-flex flex-row mb-5">

        <div class="card ml-2" style="width: 12rem;">
            <img class="card-img-top" src="{{url('storage/uploads')}}/{{$produk->gambar}}" alt="Card image cap"
                class="rounded-lg">
            <div class="card-body">
                <h5 class="card-title">{{$produk->nama_produk}}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($produk->harga)}}<br>
                    <strong>Stok :</strong>{{ $produk->stok}}<br>
                    <hr>

                </p>
                <div class="d-flex flex-row bd-highlight">
                    <a href="{{url('transaksi')}}/{{$produk->id}}" class="btn btn-success mr-2 "><i
                            class="fa-shopping-cart fa"></i> Beli</a>

                    <a href="{{url('transaksidetail')}}/{{$produk->id}}" class="btn btn-warning"><i
                            class="fas fa-info-circle"></i> Detail</a>
                </div>
            </div>

        </div>
    </div>
    @endforeach

    @endsection
