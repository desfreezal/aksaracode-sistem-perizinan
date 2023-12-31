@extends('admin-dinas.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                <div class="h-full flex flex-col justify-center items-center space-y-20">
                    <div class="w-[315px]">
                        <img src="{{ asset('pemohon/img/Illustration.png') }}" alt="ilustrasi"
                            class="object-contain aspect-square mx-auto">
                        <p class="mt-[18px] text-center text-lg text-[#878A8D]">Pilih jenis pengesahan di bawah ini
                            sebelum melanjutkan.</p>
                    </div>

                    <div class="flex flex-col gap-y-12">
                        <a href="{{ route('admin-dinas-jenis-pengesahan', ['jenis' => 'mp']) }}">
                            <div
                                class="px-14 py-4 border-[1.5px] text-primary rounded-2xl border-primary hover:bg-primary hover:text-white text-center">
                                Menunggu Persetujuan
                            </div>
                        </a>
                        <a href="{{ route('admin-dinas-jenis-pengesahan', ['jenis' => 'terkendala']) }}">
                            <div
                                class="px-14 py-4 border-[1.5px] text-primary rounded-2xl border-primary hover:bg-primary hover:text-white text-center">
                                Terkendala
                            </div>
                        </a>
                        <a href="{{ route('admin-dinas-jenis-pengesahan', ['jenis' => 'sedang-aktif']) }}">
                            <div
                                class="px-14 py-4 border-[1.5px] text-primary rounded-2xl border-primary hover:bg-primary hover:text-white text-center">
                                Sedang Aktif
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
