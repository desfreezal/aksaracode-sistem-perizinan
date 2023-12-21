@extends('surveyor.layout')

@php
    $data = [
        [
            'id' => 1,
            'Nama Pemohon' => 'Oksana Khoirunnida',
            'No Daftar' => '123456',
            'Tanggal Daftar' => '08/11/2023 - 16:59:10',
            'Nama Perizinan' => 'Daftar Ulang Izin Operasional Satuan Pendidikan SD',
        ],
        [
            'id' => 2,
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
            @include('surveyor.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                {{-- HEADER --}}
                <div class="rounded-lg flex items-center gap-x-8 px-5 py-3 shadow-xl mb-4">
                    <img src="{{ asset('surveyor/img/validasi data.png') }}" alt="valid"
                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                    <h1 class="font-medium text-xl">Riwayat Permohonan</h1>
                </div>
                {{-- END HEADER --}}

                {{-- START KONTEN --}}
                <div class="flex max-w-screen-md gap-x-3 items-center mb-3">
                    <div x-data="select" class="relative flex-grow max-w-[416px] w-full"
                        @click.outside="open = false">
                        <button type="button" @click="toggle" :class="(open) && 'ring-blue-600'"
                            class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                            <span x-text="perizinan || 'Pilih Perizinan'"></span>
                            <i class="fas fa-chevron-down text-xl"></i>
                        </button>

                        <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setPerizinan(event.target.innerText)">
                                Daftar Ulang Izin
                                Operasional</li>
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setPerizinan(event.target.innerText)">
                                Izin Pendirian</li>
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setPerizinan(event.target.innerText)">
                                Izin Operasional</li>
                        </ul>
                    </div>
                    <div x-data="select" class="relative flex-grow max-w-[416px] w-full"
                        @click.outside="open2 = false">
                        <button type="button" @click="toggle2" :class="(open2) && 'ring-blue-600'"
                            class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                            <span x-text="jenjang || 'Pilih Jenjang'"></span>
                            <i class="fas fa-chevron-down text-xl"></i>
                        </button>

                        <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open2">
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setJenjang(event.target.innerText)">
                                TK</li>
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setJenjang(event.target.innerText)">
                                SD</li>
                            <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                @click="setJenjang(event.target.innerText)">
                                SMP</li>
                        </ul>
                    </div>
                </div>

                {{-- START TABLE --}}


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="font-semibold uppercase text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Pemohon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No Daftar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Daftar
                                </th>
                                <th class="text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $value['Nama Pemohon'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $value['No Daftar'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $value['Tanggal Daftar'] }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('surveyor-detail-permohonan', ['id' => $value['id']]) }}"
                                            class="py-1 px-6 bg-primary hover:bg-primary-light rounded-3xl text-white">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>





            </div>
        </div>

    </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("select", () => ({
                open: false,
                open2: false,
                perizinan: "",
                jenjang: "",

                toggle() {
                    this.open = !this.open;
                },

                toggle2() {
                    this.open2 = !this.open2;
                },

                setPerizinan(perizinan) {
                    this.perizinan = perizinan;
                    this.open = false;
                },

                setJenjang(jenjang) {
                    this.jenjang = jenjang;
                    this.open2 = false;
                },
            }));
        });
        // INIT ALPINE DI ATAS
    </script>
@endpush
