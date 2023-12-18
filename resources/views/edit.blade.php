@extends('layout')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                     <li> {{ $error }} </li>
                 @endforeach
            </ul>
        </div>
    @endif

<div class="kotak">
    <h1 class="judul">Ubah Data Anggota Perpustakaan</h1>
    <form action="{{ route('perpus.update', $perpus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="inputNama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputNama" name="nama" value="{{ $perpus->nama }}">
        </div>
        <div class="mb-3">
            <label for="inputNim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="inputNim" name="nim" value="{{ $perpus->nim }}">
        </div>
        <div class="mb-3">
            <label for="inputTanggal_Lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="inputTanggal_Lahir" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label for="inputAngkatan" class="form-label">Angkatan</label>
            <input type="number" class="form-control" id="inputAngkatan" name="angkatan" value="{{ $perpus->angkatan }}">
        </div>
        <div class="mb-3">
            <label for="inputNo_Telepon" class="form-label">No. Telepon</label>
            <input type="number" class="form-control" id="inputNo_Telepon" name="no_telepon" value="{{ $perpus->no_telepon }}">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $perpus->email }}">
        </div>
        <div class="mb-3">
            <label for="inputAlamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="inputAlamat" name="alamat" value="{{ $perpus->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection