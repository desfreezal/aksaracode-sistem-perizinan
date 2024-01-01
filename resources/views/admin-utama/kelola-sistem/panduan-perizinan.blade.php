@extends('admin-utama.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-utama.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                <h1 class="font-semibold text-xl">Panduan Perizinan</h1>

                <div class="h-full flex flex-col justify-center items-center space-y-16 pt-4">
                    {{-- CARD --}}
                    <a
                        href="{{ route('admin-utama-kelola-daftar-ulang') }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Panduan Daftar Ulang Izin Operasional Satuan Pendidikan</h1>

                            <div class="p-[18px]  bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/Folder.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                    <a
                        href="{{ route('admin-utama-kelola-izin-pendirian') }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Panduan Izin Pendirian Satuan Pendidikan</h1>

                            <div class="p-[18px]  bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/School.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                    <a
                        href="{{ route('admin-utama-kelola-izin-operasional') }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Panduan Izin Operasional Satuan Pendidikan</h1>

                            <div class="p-[18px]  bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/Compliant.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
@endsection
