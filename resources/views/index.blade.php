@extends('layout')
@section('content')
<style>
    button{
        width: 90px;
        margin-bottom: 5px;
    }
</style>
<div class="text">
    <marquee behavior="" direction="lefy">
    <h1>Selamat Datang Perpustakaan Universitas Treasure Maker</h1>
    </marquee>
</div>
    <h2 class="judul">Daftar Anggota Perpustakaan</h2>

    <a type="button" class="btn btn-success" href="{{ route('perpus.create') }}">Registrasi</a>

    <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Angkatan</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perpus as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->no_telepon }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                    <div class="d-grid gap-3 d-md-block">
                        <a href="{{ url('/perpus/' . $item->id) }}" title="View Perpus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> <br/>
                        <a href="{{ url('/perpus/' . $item->id . '/edit') }}" title="Edit Perpus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> <br/>
    
                        <form method="POST" action="{{ url('/perpus' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Perpus" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection