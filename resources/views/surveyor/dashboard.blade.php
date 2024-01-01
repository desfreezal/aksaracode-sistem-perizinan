@extends('surveyor.layout')

@section('content')
    <div class="dashboard flex justify-center gap-5 mx-[70px] mt-6 min-h-[calc(100vh-150px)]">
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('surveyor-pengajuan-permohonan') }}">
                    <img src="{{ asset('surveyor/img/icon pengajuan permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Pengajuan Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('surveyor-lacak-permohonan') }}">
                    <img src="{{ asset('surveyor/img/icon status permohonan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Status Permohonan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('surveyor-lengkap-data') }}">
                    <img src="{{ asset('surveyor/img/icon kelengkapan data.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Kelengkapan Data</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('surveyor-panduan-perizinan') }}">
                    <img src="{{ asset('surveyor/img/icon panduan perizinan.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Panduan Perizinan</div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('surveyor-monitoring') }}">
                    <img src="{{ asset('surveyor/img/icon dashboard statistik.png') }}" alt="pengajuan permohonan" /></a>
            </div>
            <div class="teks-judul"><a href="#">
                    <p>Dashboard Statistik</div>
        </div>
    </div>
@endsection
