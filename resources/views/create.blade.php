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
    <h1 class="judul">Registrasi Anggota</h1>
    <form action="{{ route('perpus.store') }}" method="POST" class="form">
        @csrf
        <div class="mb-3">
            <label for="inputNama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="mb-3">
            <label for="inputNim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="inputNim" name="nim" placeholder="Masukkan nim">
        </div>

        <div class="column">
            <div class="mb-3">
                <label for="inputTanggal_Lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputTanggal_Lahir" name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="inputAngkatan" class="form-label">Angkatan</label>
                <input type="number" class="form-control" id="inputAngkatan" name="angkatan" placeholder="Tahun masuk">
            </div>
        </div>

        <div class="mb-3">
            <label for="inputNo_Telepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="inputNo_Telepon" name="no_telepon" placeholder="Masukkan nomor telepon">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Masukkan email">
        </div>
        <div class="mb-3">
            <label for="inputAlamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukkan alamat">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection