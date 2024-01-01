@extends('admin-dinas.panduan-perizinan.layout')

@section('panduan-content')
    @if (!request('peruntukan'))
        {{-- header --}}
        <header class="bg-primary px-11 flex items-center gap-x-11 py-2 rounded-md mb-[21px]">
            <img src="{{ asset('home/img/Folder.png') }}" class="w-11" alt="">
            <h1 class="font-medium text-3xl text-white">Izin Operasional Satuan Pendidikan</h1>
        </header>
    @else
        <div class="mt-[26px] mb-7">

            <header class="bg-primary px-11 flex items-center gap-x-11 py-2 rounded-md mb-[21px]">
                <img src="{{ asset('home/img/Folder.png') }}" class="w-11" alt="">
                <h1 class="font-medium text-3xl text-white">Panduan Perizinan</h1>
            </header>

            <div class="flex items-center justify-between ">
                <div class="inline-block mb-10">
                    <h1 class="font-semibold text-2xl ">Alur Perizinan</h1>
                    <div class="w-auto h-[6px] bg-underline rounded-md"></div>
                </div>

                <button>
                    <div class="flex items-center gap-4 text-primary">
                        <p class="font-medium text-lg">
                            Edit Persyaratan
                        </p>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </div>
                </button>
            </div>

            <div class="w-[809px] mx-auto mb-16">
                <img src="{{ asset('home/img/Alur Perizinan.png') }}" alt="Alur Perizinan" class="w-full" />
            </div>

            <div class="inline-block mb-5">
                <h1 class="font-semibold text-2xl">Durasi Pemrosesan</h1>
                <div class="w-auto h-[6px] bg-underline rounded-md"></div>
            </div>

            <div class="flex items-center gap-x-1 mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class="text-lg">5 hari kerja (pada hari dan dan jam kerja)</p>
            </div>

            <div class="inline-block">
                <h1 class="font-semibold text-2xl">Persyaratan</h1>
                <div class="w-auto h-[6px] bg-underline rounded-md"></div>
            </div>

        </div>
    @endif

    <div x-data="select" class="relative w-[1000px]" @click.outside="open = false">
        <button @click="toggle" :class="(open) && 'ring-blue-600'"
            class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
            <span
                x-text="@if (request('peruntukan') === 'tk') 'Izin Operasional Satuan Pendidikan TK'
@elseif(request('peruntukan') === 'sd')
'Izin Operasional Satuan Pendidikan SD'
@elseif (request('peruntukan') === 'smp')
'Izin Operasional Satuan Pendidikan SMP'
@else
'Pilih Peruntukan' @endif"></span>
            <i class="fas fa-chevron-down text-xl"></i>
        </button>

        <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('tk')">Daftar
                Ulang Izin
                Operasional Satuan Pendidikan TK</li>
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('sd')">Daftar
                Ulang Izin
                Operasional Satuan Pendidikan SD</li>
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('smp')">Daftar
                Ulang Izin
                Operasional Satuan Pendidikan SMP</li>
        </ul>
    </div>

    <div class="my-5 flex justify-between items-center">
        <div class="flex items-center gap-x-3">
            <img src="{{ asset('home/img/Page.png') }}" alt="page">
            <h1 class="font-semibold text-base">
                Persyaratan yang diperlukan
            </h1>
        </div>

    </div>

    @if (request('peruntukan') === 'tk')
        <div class="relative overflow-x-auto shadow-md">
            @include('admin-dinas.panduan-perizinan.izin-operasional.table-tk')
        </div>
    @elseif(request('peruntukan') === 'sd')
        <div class="relative overflow-x-auto shadow-md">
            @include('admin-dinas.panduan-perizinan.izin-operasional.table-sd')
        </div>
    @elseif(request('peruntukan') === 'smp')
        <div class="relative overflow-x-auto shadow-md">
            @include('admin-dinas.panduan-perizinan.izin-operasional.table-smp')
        </div>
    @endif

    @if (request('peruntukan'))
        <div class="flex justify-end items-center mt-8">
            <button
                class="py-1 px-12 border border-primary rounded-3xl font-semibold text-xl bg-primary hover:bg-primary-light text-white">Download
            </button>
        </div>
    @endif

    {{-- END CONTENT --}}
@endsection
