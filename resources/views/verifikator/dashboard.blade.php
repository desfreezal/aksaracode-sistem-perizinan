@extends('verifikator.layout')

@section('content')
    <div class="dashboard flex justify-center mt-6 min-h-[calc(100vh-150px)]">
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('verifikator-monitoring') }}">
                    <img src="{{ asset('verifikator/img/icon pengajuan permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Pengajuan Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('verifikator-lacak-permohonan') }}">
                    <img src="{{ asset('verifikator/img/icon status permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Status Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('verifikator-lengkap-data') }}">
                    <img src="{{ asset('verifikator/img/icon kelengkapan data.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Kelengkapan Data</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('verifikator-panduan-perizinan') }}">
                    <img src="{{ asset('verifikator/img/icon panduan perizinan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Panduan Perizinan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('verifikator-monitoring') }}">
                    <img src="{{ asset('verifikator/img/icon dashboard statistik.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Dashboard Statistik</div>
        </div>
    </div>
@endsection
