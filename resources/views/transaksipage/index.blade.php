@extends('layouts.admin')
@section('contentAdmin')
@section('tittle', 'Halaman Data Transaksi')
<div class="card">

    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">

            <br><br>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>No. Hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @forelse($users as $us)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $us-> name}}</td>
                    <td>{{ $us-> email}}</td>
                    <td>{{ $us-> password}}</td>
                    <td>{{ $us-> alamat}}</td>
                    <td>{{ $us-> kota}}</td>
                    <td>{{ $us-> provinsi}}</td>
                    <td>{{ $us-> nohp}}</td>


                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini ??');"
                            action="{{ route('users.destroy', $us->id) }}" method="POST">
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
