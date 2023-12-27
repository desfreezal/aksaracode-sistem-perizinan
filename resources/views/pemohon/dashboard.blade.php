@extends('pemohon.layout')

@section('notif-container')
    <button class="float-right m-5" id="closeNotif">X</button>
    <div class="w-60 text-center flex justify-center items-center flex-col m-16">
        <img src="{{ asset('pemohon/img/Illustration.png') }}" class="aspect-square object-fill w-40 mb-7" alt="">
        <p>Kami akan memberi tahu Anda setelah kami melakukan
            sesuatu untukmu</p>
    </div>
@endsection

@section('content')
    <div class="container-kotak-cokelat" style="gap: 10px; margin: 80px 50px">
        <div class="kotak-cokelat">
            <div class="daftar-ulang">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Folder.png') }}" alt="LogoDaftarUlang" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-daftar-ulang') }}">Daftar Ulang Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-1">
            <div class="izin-pendirian">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/School.png') }}" alt="LogoIzinPendirian" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-izin-pendirian') }}">Izin Pendirian Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-2">
            <div class="izin-operasional">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Compliant.png') }}" alt="LogoIzinOperasional" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-izin-operasional') }}">Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
