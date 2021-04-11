<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TOKOKNA</title>
    <link rel="shortcut icon" href="{{asset('style')}}/dist/img/logo.ico" type="image/x-icon">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light text-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url('images/1.png')}}" width="200" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <img class="mb-2" src="{{url('storage/uploads/logo (2).png')}}" width="10%">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">

                                <i class="fas fa-home text-dark"> HOME</i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-users text-dark"></i> ABOUT US <span class="caret"></span>
                            </a>

                            <div id="latar" class="dropdown-menu dropdown-menu-right text-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href='latar'>
                                    {{ __('Latar Belakang Karang Taruna') }}
                                </a>
                                <a class="dropdown-item" href="/latar#visi">
                                    {{ __('Visi, Misi dan Tujuan Karang Taruna') }}
                                </a>
                                <a class="dropdown-item" href="#">
                                    {{ __('Alamat Sekretariat Karang Taruna') }}
                                </a>
                                <a class="dropdown-item" href="#" >
                                    {{ __('Struktur Organisasi Karang Taruna') }}
                                </a>
                                <a class="dropdown-item" href="#galeri">
                                    {{ __('Galeri Karang Taruna') }}
                                </a>


                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/produk">


                                <i class="fas fa-store text-dark"> PRODUK</i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="fas fa-mobile text-dark"></i> Contact Us <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right text-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="https://www.instagram.com/karangtarundesakenanga/">
                                                     <i class="fab fa-instagram"></i>
                                    {{ __('Instagram') }}
                                </a>
                                <a class="dropdown-item" href="https://wa.me/685939564066?text=Selamat Datang, kamu sedang ada di layanan customer service. Ada yang bisa saya bantu ?" >
                                                     <i class="fab fa-whatsapp"></i>
                                    {{ __('Whatsapp') }}
                                </a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fab fa-facebook"></i>
                                    {{ __('Facebook') }}
                                </a>


                            </div>
                        </li>

                    </ul>
                </div>
                </li>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('history') }}">

                            <i class="fas fa-cash-register"> Cek Pesanan Anda</i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <?php
                                 $transaksi_utama = \App\Models\Transaksi::where('user_id', Auth::user()->id)->where('status',0)->first();
                                 if(!empty($transaksi_utama))
                                    {
                                     $notif = \App\Models\TransaksiDetail::where('transaksi_id', $transaksi_utama->id)->count();
                                    }
                                ?>
                        <a class="nav-link" href="{{ url('check-out') }}">
                            <i class="fa fa-shopping-cart"> Keranjang Belanja</i>
                            @if(!empty($notif))
                            <span class="badge badge-danger">{{ $notif }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">

                            <i class="fas fa-cash-register"> Profil Anda</i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

</html>
