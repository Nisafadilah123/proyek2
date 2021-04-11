@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>transaksi anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di
                        rekening
                        <strong>Bank BJB Nomer Rekening : Karang Taruna </strong> dengan nominal : <strong>Rp.
                            {{ number_format($transaksi->kode+$transaksi->jumlah_harga) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($transaksi))
                    <p align="right">Tanggal Pesan : {{ $transaksi->tanggal }}</p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($transaksi_details as $transaksi_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ url('storage/uploads') }}/{{ $transaksi_detail->produk->gambar }}"
                                            width="100" alt="...">
                                    </td>
                                    <td>{{ $transaksi_detail->produk->nama_produk }}</td>
                                    <td>{{ $transaksi_detail->jumlah }} </td>
                                    <td align="right">Rp. {{ number_format($transaksi_detail->produk->harga) }}</td>
                                    <td align="right">Rp. {{ number_format($transaksi_detail->jumlah_harga) }}</td>

                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($transaksi->jumlah_harga) }}</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($transaksi->kode) }}</strong></td>

                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($transaksi->kode+$transaksi->jumlah_harga) }}</strong></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
