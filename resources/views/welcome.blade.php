@extends('layout.master')

@section('title', 'Dashboard PPDB')

@section('content')
<div class="content shadow-sm p-4 bg-white">
    <h2>Dashboard PPDB</h2>
    <p>Selamat datang di sistem PPDB sekolah. Pantau data pendaftaran di sini.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pendaftar</h5>
                    <p class="card-text">150 Siswa</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Terverifikasi</h5>
                    <p class="card-text">120 Siswa</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Belum Diverifikasi</h5>
                    <p class="card-text">30 Siswa</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection