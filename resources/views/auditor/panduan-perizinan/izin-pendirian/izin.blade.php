@extends('auditor.panduan-perizinan.layout')

@section('panduan-content')
    <header class="bg-primary px-11 flex items-center gap-x-11 py-2 rounded-md mb-[21px]">
        <img src="{{ asset('home/img/Folder.png') }}" class="w-11" alt="">
        <h1 class="font-medium text-3xl text-white">Izin Pendirian Satuan Pendidikan</h1>
    </header>

    <div x-data="select" class="relative w-[1000px]" @click.outside="open = false">
        <button @click="toggle" :class="(open) && 'ring-blue-600'"
            class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
            <span
                x-text="@if (request('peruntukan') === 'tk') 'Izin Pendirian Satuan Pendidikan TK'
        @elseif(request('peruntukan') === 'sd')
        'Izin Pendirian Satuan Pendidikan SD'
        @elseif (request('peruntukan') === 'smp')
        'Izin Pendirian Satuan Pendidikan SMP'
        @else
        'Pilih Peruntukan' @endif"></span>
            <i class="fas fa-chevron-down text-xl"></i>
        </button>

        <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('tk')">Daftar Ulang Izin
                Pendirian Satuan Pendidikan TK</li>
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('sd')">Daftar Ulang Izin
                Pendirian Satuan Pendidikan SD</li>
            <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('smp')">Daftar Ulang Izin
                Pendirian Satuan Pendidikan SMP</li>
        </ul>
    </div>

    <div class="my-5 flex justify-between items-center">
        <div class="flex items-center gap-x-3">
            <img src="{{ asset('home/img/Page.png') }}" alt="page">
            <h1 class="font-semibold text-base">
                Persyaratan yang diperlukan
            </h1>
        </div>
        <button
            class="py-1 px-12 border border-primary rounded-3xl font-semibold text-xl text-primary hover:bg-primary hover:text-white">Siap
            Mengajukan
        </button>
    </div>

    @if (request('peruntukan') === 'tk')
        <div class="relative overflow-x-auto shadow-md">
            @include('auditor.panduan-perizinan.izin-pendirian.table-tk')
        </div>
    @elseif(request('peruntukan') === 'sd')
        <div class="relative overflow-x-auto shadow-md">
            @include('landing-page.izin-pendirian.table-sd')
        </div>
    @elseif(request('peruntukan') === 'smp')
        <div class="relative overflow-x-auto shadow-md">
            @include('landing-page.izin-pendirian.table-smp')
        </div>
    @endif
@endsection
