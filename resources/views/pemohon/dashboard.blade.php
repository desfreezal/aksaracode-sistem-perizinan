@extends('pemohon.layout')

@section('content')
    <div class="container-kotak-cokelat" style="gap: 10px; margin: 80px 50px">
        <div class="kotak-cokelat">
            <div class="daftar-ulang">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Folder.png') }}" alt="LogoDaftarUlang" />
                </div>
                <div class="tombol-putih">
                    <a href="#">Daftar Ulang Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-1">
            <div class="izin-pendirian">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/School.png') }}" alt="LogoIzinPendirian" />
                </div>
                <div class="tombol-putih">
                    <a href="#">Izin Pendirian Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-2">
            <div class="izin-operasional">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Compliant.png') }}" alt="LogoIzinOperasional" />
                </div>
                <div class="tombol-putih">
                    <a href="#">Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
    </div>
@endsection

