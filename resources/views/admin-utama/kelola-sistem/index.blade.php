@extends('admin-utama.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-utama.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                <div class="h-full flex flex-col justify-center items-center space-y-20">
                    <div class="w-[315px]">
                        <img src="{{ asset('pemohon/img/Illustration.png') }}" alt="ilustrasi"
                            class="object-contain aspect-square mx-auto">
                        <p class="mt-[18px] text-center text-lg text-[#878A8D]">Pilih jenis kelola sistem di bawah ini
                            sebelum melanjutkan.</p>
                    </div>

                    <div class="flex flex-col gap-y-12">
                        <a href="{{ route('admin-utama-daftar-user') }}">
                            <div
                                class="px-14 py-4 border-[1.5px] text-primary rounded-2xl border-primary hover:bg-primary hover:text-white text-center">
                                Informasi Akun
                            </div>
                        </a>
                        <a href="{{ route('admin-utama-kelola-panduan') }}">
                            <div
                                class="px-14 py-4 border-[1.5px] text-primary rounded-2xl border-primary hover:bg-primary hover:text-white text-center">
                                Panduan Perizinan
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
