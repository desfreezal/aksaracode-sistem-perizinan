@extends('operator.layout')

@php
    $data = [
        [
            'Nama Pemohon' => 'Oksana Khoirunnida',
            'No Daftar' => '123456',
            'Tanggal Daftar' => '08/11/2023 - 16:59:10',
            'Nama Perizinan' => 'Daftar Ulang Izin Operasional Satuan Pendidikan SD',
        ],
        [
            'Nama Pemohon' => 'Jauza Audy Safitri',
            'No Daftar' => '123457',
            'Tanggal Daftar' => '21/11/2023 - 16:18:05',
            'Nama Perizinan' => 'Izin Pendirian Satuan Pendidikan SD',
        ],
    ];
@endphp

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border  mb-10 w-full" id="content">

                {{-- HEADER --}}
                <div class="flex">
                    <a href="{{ route('operator-validasi-data') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon"
                            class="w-11 h-11 bg-primary text-white p-2 rounded-lg font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </a>

                    {{-- CARD --}}
                    <div class="w-[413px] max-h-[181px]  box-content rounded-lg shadow-xl ml-[27px] p-6">
                        <h1 class="mb-4 font-semibold text-xl">Identitas Pemohon</h1>

                        <table>
                            <tbody>
                                <tr>
                                    <td class="pb-2 font-medium">Nama</td>
                                    <td class="pb-2 px-4">:</td>
                                    <td class="pb-2 font-normal">Oksana Khoirunnida</td>
                                </tr>
                                <tr>
                                    <td class="pb-2 font-medium">NIK</td>
                                    <td class="pb-2 px-4">:</td>
                                    <td class="pb-2 font-normal">123456</td>
                                </tr>
                                <tr>
                                    <td class="pb-2 font-medium">No. Handphone</td>
                                    <td class="pb-2 px-4">:</td>
                                    <td class="pb-2 font-normal">083894059190</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- CARD --}}
                    <div class="w-[413px] max-h-[181px] box-content rounded-lg shadow-xl ml-[17px] p-6">
                        <h1 class="font-semibold text-xl mb-4">Sub Perizinan</h1>

                        <p class="w-[240px] font-medium text-base">Daftar Ulang Izin Operasional
                            Satuan Pendidikan SD</p>
                    </div>

                    {{-- CARD --}}
                    <div
                        class="w-[413px] max-h-[120px]  box-content rounded-lg shadow-xl ml-[44px] p-6 flex items-center flex-col">
                        <h1 class="mb-[18px] font-semibold text-xl">Permohonan</h1>

                        <div class="flex gap-x-7">
                            <button class="py-1 px-[47px] rounded-xl bg-primary text-white hover:bg-primary-light font-bold">Diterima</button>
                            <button class="py-1 px-[47px] rounded-xl border border-black font-bold">Ditolak</button>
                        </div>
                    </div>
                </div>
                {{-- END HEADER --}}

                {{-- START KONTEN --}}
                <div class="mt-7 ml-16">
                    @include('operator.berkas-daftar-ulang.table-sd')
                </div>
                {{-- END KONTEN --}}
            </div>
        </div>

    </div>
    </div>
@endsection
