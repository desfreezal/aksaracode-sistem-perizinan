@extends('admin-dinas.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                <div class="h-full flex flex-col justify-center items-center space-y-16 pt-10">
                    {{-- CARD --}}
                    <a
                        href="{{ route('admin-dinas-data-pengesahan', ['layanan' => 'daftar-ulang-izin-operasional', 'jenis' => $jenis]) }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Pengesahan Permohonan Daftar Ulang Izin
                                Operasional Satuan Pendidikan</h1>

                            <div class="p-[18px] w-full h-full bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/Folder.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                    <a
                        href="{{ route('admin-dinas-data-pengesahan', ['layanan' => 'izin-pendirian', 'jenis' => $jenis]) }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Pengesahan Permohonan Izin Pendirian Satuan
                                Pendidikan</h1>

                            <div class="p-[18px] w-full h-full bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/School.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                    <a
                        href="{{ route('admin-dinas-data-pengesahan', ['layanan' => 'izin-operasional', 'jenis' => $jenis]) }}">
                        <div class=" flex items-center max-w-md rounded-3xl bg-primary text-white">
                            <h1 class="font-bold pr-1 ml-10 my-9 flex-grow ">Pengesahan Permohonan Izin Operasional Satuan
                                Pendidikan</h1>

                            <div class="p-[18px] w-full h-full bg-edu-bg rounded-full mr-9">
                                <img src="{{ asset('home/img/Compliant.png') }}" alt="folder" class="mx-auto">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
