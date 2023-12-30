@extends('admin-dinas.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                {{-- HEADER --}}
                <div class="flex items-center gap-4 mb-10">
                    <a href="{{ route('admin-dinas-jenis-pengesahan', ['jenis' => $jenis]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </a>

                    <h1 class="font-bold text-[20px]">Pengesahan Daftar Ulang Izin Operasional Satuan Pendidikan</h1>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center">
                        <label for="pencarian" class="w-24">Pencarian</label>
                        <input type="text" class="flex-grow border-[1.5px] border-primary rounded-xl">
                    </div>
                    <div class="flex items-center gap-6">
                        <h1 class="font-bold text-sm">Tampilkan</h1>
                        <select name="jumlah" id="jumlah" class="rounded-2xl py-0">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                        <h1 class="font-bold text-sm">data</h1>
                    </div>

                    {{-- DATA DI DALAM --}}
                    <div id="container" class="space-y-8">
                        {{-- CARD --}}
                        <div class="shadow-lg rounded-lg border border-[#E5DBDB] bg-[#FBFBFB] px-3 py-4 space-y-4">
                            <div class="flex justify-between items-center text-primary">
                                <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                                <h1 class="font-semibold text-base">007524</h1>
                            </div>
                            <h1>Daftar Ulang Izin Operasional Satuan Pendidikan SD</h1>
                            <p class="text-[#D77B78]">08/11/2023 - 16:59:10</p>

                            <div class="flex items-center w-full">
                                <button
                                    class="flex-grow text-center border rounded-lg p-1 text-[#26CE17] border-[#26CE17] bg-[#D4FADE]">Disetujui</button>

                                <a href="{{ route('admin-dinas-buat-surat', ['id' => 1, 'jenis' => $jenis, 'layanan' => $layanan]) }}"
                                    class="flex-grow text-center group">
                                    <h1 class="text-primary font-semibold group-hover:text-primary-light">Buat Surat</h1>
                                </a>
                            </div>
                        </div>

                        <div class="shadow-lg rounded-lg border border-[#E5DBDB] bg-[#FBFBFB] px-3 py-4 space-y-4">
                            <div class="flex justify-between items-center text-primary">
                                <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                                <h1 class="font-semibold text-base">007524</h1>
                            </div>
                            <h1>Daftar Ulang Izin Operasional Satuan Pendidikan SD</h1>
                            <p class="text-[#D77B78]">08/11/2023 - 16:59:10</p>

                            <div class="flex items-center w-full">
                                <button
                                    class="flex-grow text-center border rounded-lg p-1 text-[#26CE17] border-[#26CE17] bg-[#D4FADE]">Disetujui</button>

                                <a href="{{ route('admin-dinas-buat-surat', ['id' => 2, 'jenis' => $jenis, 'layanan' => $layanan]) }}"
                                    class="flex-grow text-center group">
                                    <h1 class="text-primary font-semibold  group-hover:text-primary-light">Buat Surat</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
