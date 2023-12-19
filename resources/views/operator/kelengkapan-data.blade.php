@extends('operator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('operator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="wrapper space-y-9">
                    <div class="space-y-2 cursor-pointer">
                        <a href="">
                            <h1 class="font-semibold text-xl">Permohonan</h1>
                            <div class="flex items-center gap-x-8">
                                <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                    <img src="{{ asset('operator/img/validasi data.png') }}" alt="validasi"
                                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                    <p class="font-medium text-base">Validasi Data</p>
                                </div>
                        </a>
                        <a href="">
                            <div class="w-[265px] py-5 pl-5 shadow-xl flex items-center gap-x-8 rounded-lg">
                                <img src="{{ asset('operator/img/icon status permohonan.png') }}" alt="validasi"
                                    class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                <p class="font-medium text-base">Status Permohonan</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="space-y-2 cursor-pointer">
                    <a href="">
                        <h1 class="font-semibold text-xl">Panduan Perizinan</h1>
                        <div class="flex items-center gap-x-8">
                            <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                <img src="{{ asset('operator/img/icon panduan perizinan.png') }}" alt="validasi"
                                    class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                <p class="font-medium text-base">Panduan Perizinan</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 cursor-pointer">
                    <a href="">
                        <h1 class="font-semibold text-xl">Monitoring</h1>
                        <div class="flex items-center gap-x-8">
                            <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                <img src="{{ asset('operator/img/icon dashboard statistik.png') }}" alt="validasi"
                                    class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                <p class="font-medium text-base">Dashboard Statistik</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 cursor-pointer">
                    <a href="">
                        <h1 class="font-semibold text-xl">Pengesahan</h1>
                        <div class="flex items-center gap-x-8">
                            <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                <img src="{{ asset('operator/img/pengesahan dokumen.png') }}" alt="validasi"
                                    class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                <p class="font-medium text-base">Pengesahan Dokumen</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 cursor-pointer">
                    <a href="">
                        <h1 class="font-semibold text-xl">Kelola Sistem</h1>
                        <div class="flex items-center gap-x-8">
                            <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                <img src="{{ asset('operator/img/kelola sistem.png') }}" alt="validasi"
                                    class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                <p class="font-medium text-base">Kelola Sistem</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
