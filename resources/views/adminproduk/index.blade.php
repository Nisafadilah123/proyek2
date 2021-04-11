@extends('layouts.admin')
@section('contentAdmin')
@section('tittle', 'Halaman Data Produk')
<div class="card">

    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <a href="{{ route('adminproduk.create') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> Tambah Data Produk</a>
            <br><br>
            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{ session('pesan') }}
            </div>
            @endif
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Keterangan</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @forelse($produks as $prd)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $prd-> nama_produk}}</td>
                    <td>{{ $prd-> stok}}</td>
                    <td>{{ $prd-> harga}}</td>

                    <td class="text-center">
                        <img src="{{ Storage::url('public/uploads/').$prd->gambar }}" class="rounded"
                            style="width: 150px">
                    </td>
                    <td>{{ $prd-> keterangan}}</td>


                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini ??');"
                            action="{{ route('adminproduk.destroy', $prd->id) }}" method="POST">
                            <a href="{{ route('adminproduk.edit', $prd->id) }}" class="btn btn-sm btn-warning"><i
                                    class="far fa-edit"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                                Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Blog belum Tersedia.
                </div>
                @endforelse

            </tbody>
        </table>
        {{ $produks->links() }}



    </div>
</div>

<br>
<script>
    //pesan
        @if(session()-> has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
</script>
@endsection
