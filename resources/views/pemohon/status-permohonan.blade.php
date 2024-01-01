@extends('pemohon.layout')



@section('content')
    <div class="text-edu-black my-8 mx-[50px]">

        <div class="py-3 pl-11 mb-5 bg-primary rounded-md">
            <h1 class="text-white font-medium text-3xl">Status Permohonan Saya</h1>
        </div>

        <form action="" class="space-y-3 mb-8">
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Sub Perizinan</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="Daftar Ulang Izin Opersional Satuan Pendidikan SD">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Tanggal Pendaftaran</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="10 Oktober 2023">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">NIK Pemohon</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="1234567891012345">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Nama Pemohon</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="Putri Lestari">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">No. Handphone Pemohon</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="081234567891">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">ID Pendaftaran</label>
                <input type="text" readonly class="flex-grow border border-abu-abu rounded" value="10982734">
            </div>
        </form>


        <div class="flex justify-center mb-12">
            <h1 class="font-semibold text-2xl">Alur Perizinan</h1>
        </div>

        <div class="flex justify-center mx-auto items-center p-4 w-3/4 mb-52">
            <div class="flex flex-col items-center relative">
                {{-- CHECKBOX --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary w-6 h-6">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Validasi Data</h1>
                    <p class="font-thin text-sm">Sudah Selesai</p>
                </div>
            </div>
            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary "></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>
            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>
                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Melakukan Survei</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>

            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50"></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>


            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Verifikasi data setelah survei</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>

            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50"></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>
            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Permohonan disetujui</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed w-12 h-12 bottom-28 rounded-full right-10 bg-primary">
        <a href="/chatting">
            <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
        </a>
    </div>
@endsection
