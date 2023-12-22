@extends('kepala-dinas.layout')

@section('content')
    <div class="dashboard flex justify-center mt-6 min-h-[calc(100vh-150px)]">
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('kepala-dinas-monitoring') }}">
                    <img src="{{ asset('kepala-dinas/img/icon pengajuan permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Pengajuan Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('kepala-dinas-lacak-permohonan') }}">
                    <img src="{{ asset('kepala-dinas/img/icon status permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Status Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('kepala-dinas-lengkap-data') }}">
                    <img src="{{ asset('kepala-dinas/img/icon kelengkapan data.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Kelengkapan Data</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('kepala-dinas-panduan-perizinan') }}">
                    <img src="{{ asset('kepala-dinas/img/icon panduan perizinan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Panduan Perizinan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('kepala-dinas-monitoring') }}">
                    <img src="{{ asset('kepala-dinas/img/icon dashboard statistik.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Dashboard Statistik</div>
        </div>
    </div>
@endsection