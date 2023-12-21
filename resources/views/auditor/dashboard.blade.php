@extends('auditor.layout')

@section('content')
    <div class="dashboard flex justify-center mt-6 min-h-[calc(100vh-150px)]">
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('auditor-monitoring') }}">
                    <img src="{{ asset('auditor/img/icon pengajuan permohonan.png') }}" alt="pengajuan permohonan" />
                </a>
            </div>
            <div class="teks-judul">
                <a href="#">
                    <p>Monitoring</p>
                </a>
            </div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('auditor-panduan-perizinan') }}">
                    <img src="{{ asset('auditor/img/icon panduan perizinan.png') }}" alt="pengajuan permohonan" />
                </a>
            </div>
            <div class="teks-judul">
                <a href="#">
                    <p>Panduan Perizinan</p>
                </a>
            </div>
        </div>
        <div class="kotak-putih cursor-pointer group">
            <div class="kotak-coklat group-hover:bg-primary-light">
                <a href="{{ route('auditor-monitoring') }}">
                    <img src="{{ asset('auditor/img/icon dashboard statistik.png') }}" alt="pengajuan permohonan" />
                </a>
            </div>
            <div class="teks-judul">
                <a href="#">
                    <p>Dashboard Statistik</p>
                </a>
            </div>
        </div>
    </div>
@endsection