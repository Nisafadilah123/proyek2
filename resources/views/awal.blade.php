@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <marquee bgcolor="#556B2F" style="color:#eed38e;">
                <h2>Aplikasi UMKM By Nisa</h2>
            </marquee> --}}
        </div>
        {{-- <div class="col-md-12  mb-5">

            <img src="{{url('images/bg.png')}}" class="rounded-pill" width="100%" height="300" alt="">
    </div> --}}

    <div class="col-md-12 mb-5 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#" data-slide-to="0"></li>
                <li data-target="#" data-slide-to="1"></li>
                <li data-target="#" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('images/slide.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('images/slide1.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mx-auto">
            <div class="col-12">
                <h1 class="text-center mt-5 font-weight-bold">Kategori</h1>
            </div>
        </div>
        <div class="d-flex flex-row mb-5">




            <div class="card mx-auto" style="width: 10rem; height: 13rem;">
                <a href="#"><img class="card-img-top" src="{{url('storage/uploads/drink.jpg')}}" alt="Card image cap"
                        class="rounded-lg">
                </a>
                <div class="card-body">
                    <h6 class="card-title text-center">Industri Olahan</h6>
                </div>

            </div>
            <div class="card mx-auto" style="width: 10rem; height: 13rem;">
                <a href="#"><img class="card-img-top" src="{{url('storage/uploads/fish.jpg')}}" alt="Card image cap"
                        class="rounded-lg">
                </a>
                <div class="card-body">
                    <h6 class="card-title text-center">Hewan</h6>
                </div>

            </div>
            <div class="card mx-auto" style="width: 10rem; height: 13rem;">
                <a href="#"><img class="card-img-top" src="{{url('storage/uploads/phone.jpg')}}" alt="Card image cap"
                        class="rounded-lg">
                </a>
                <div class="card-body">
                    <h6 class="card-title text-center">Pulsa dan Data</h6>
                </div>

            </div>
            <div class="card mx-auto" style="width: 10rem; height: 13rem;">
                <a href="#"><img class="card-img-top" src="{{url('storage/uploads/jasa.jpg')}}" alt="Card image cap"
                        class="rounded-lg">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Jasa</h5>
                </div>

            </div>
            <div class="card mx-auto" style="width: 10rem; height: 13rem;">
                <a href="#"><img class="card-img-top" src="{{url('storage/uploads/thing.jpg')}}" alt="Card image cap"
                        class="rounded-lg">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Barang</h5>
                </div>

            </div>



        </div>
        <hr>


        <div>
            <h1 class="text-center mt-5 font-weight-bold">Beli Produk Unggulan UMKM</h1>
        </div>
    </div>


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
</div>





    <div class="row bg-light shadow rounded">
        <div class="col-12 col-md mt-3">
            <img class="mb-2" src="{{url('storage/uploads/logo (2).png')}}" width="70%">
            <p class="mt-2 text-dark">
                Desa Migran Produktif (Desmigratif)
                <br>
                Desa Kenanga Kecamatan Sidang
                <br>
                Kabupaten Indramayu
            </p>
            <small class="d-block mb-3 text-muted">&copy; 2021</small>
        </div>
        <div class="col-6 col-md mt-3">
            <h2 class="text-dark">Tentang Kami</h2>
            <hr class="featurette-divider">
            <ul class="list-unstyled text-small text-dark">
                <li class="mb-1"><a class="text-dark" href="#">Profil Karang Taruna</a></li>
                <li class="mb-1"><a class="text-dark" href="#">Aktifitas Karang Taruna</a></li>
                <li class="mb-1"><a class="text-dark" href="#">GALERI</a></li>
                <li class="mb-1"><a class="text-dark" href="#">Alamat Sekretariat Karang Taruna</a></li>
            </ul>
        </div>
        <div class="col-6 col-md mt-3">
            <h2 class="text-dark">Kontak Kami</h2>
            <hr class="featurette-divider">
            <ul class="list-unstyled text-small text-dark">
                <li class="mb-1"><a class="text-dark" href="#">Instagram</a></li>
                <li class="mb-1"><a class="text-dark" href="#">Whats App</a></li>
                <li class="mb-1"><a class="text-dark" href="#">Facebook</a></li>

            </ul>
        </div>
        <div class="col-12 text-center">

            <small class="d-block mb-3 text-white text-muted">&copy; 2021. Design & Developed by Kelompok 6</small>
        </div>
    </div>

</div>
@endsection
