@extends('layout')
@section('content')

<div class="tampil">
    <div class="judul"><h2>Tampil Data Mahasiswa</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $perpus->nama }}</h5>
            <h5 class="card-title">NIM : {{ $perpus->nim }}</h5>
            <h5 class="card-title">Tanggal Lahir : {{ $perpus->tanggal_lahir }}</h5>
            <h5 class="card-title">Angkatan : {{ $perpus->angkatan }}</h5>
            <h5 class="card-title">No. Telepon : {{ $perpus->no_telepon }}</h5>
            <h5 class="card-title">Email : {{ $perpus->email }}</h5>
            <h5 class="card-title">Alamat : {{ $perpus->alamat }}</h5>
        </div>
    </div>