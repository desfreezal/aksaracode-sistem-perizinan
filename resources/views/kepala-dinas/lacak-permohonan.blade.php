@extends('kepala-dinas.layout')

@section('content')
    <div class="text-edu-black my-8 mx-[50px]">

        <div class="py-3 pl-11 bg-primary rounded-md">
            <h1 class="text-white font-medium text-3xl">Lacak Permohonan Saya</h1>
        </div>

        <div class="flex items-center gap-12 mx-4 mt-5">
            <img src="{{ asset('pemohon/img/Loupe.png') }}" alt="">
            <div class="w-[1051px]">
                <p class="font-medium text-xl py-[10px]">Pemohon dapat melakukan pengecekan status terkini terkait
                    permohonan
                    dengan cara memasukkan ID Pendaftaran yang diberikan oleh sistem pada saat awal permohonan Izin</p>
            </div>
        </div>

        <form action="{{ route('kepala-dinas-status-permohonan') }}" method="get">
            <div class="mt-16 mb-40 pt-20 pb-24 shadow-2xl rounded flex flex-col">

                <div class="flex gap-8 items-center justify-center mb-14">
                    <label for="id" class="text-base">Masukkan ID Pendaftaran</label>
                    <input type="text" name="idpendaftaran" class="px-5 py-1 rounded-md border-opacity-70"
                        id="id">
                </div>

                <button type="submit"
                    class="mx-auto px-7 py-3 rounded-xl bg-primary text-white font-bold text-xl hover:bg-primary-light">Cari
                    Permohonan</button>
            </div>
        </form>
    </div>

    <div class="fixed w-12 h-12 bottom-28 rounded-full right-10 bg-primary">
        <a href="{{ '#' }}">
            <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
        </a>
    </div>
@endsection
