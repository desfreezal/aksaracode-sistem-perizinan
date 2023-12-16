@extends('landing-page.layout')

@section('title')
    Daftar Ulang
@endsection

@section('content')
    <div class="w-full">

        {{-- header --}}
        <header class="bg-primary px-11 flex items-center gap-x-11 py-2 rounded-md mb-[21px]">
            <img src="{{ asset('home/img/Folder.png') }}" class="w-11" alt="">
            <h1 class="font-medium text-3xl text-white">Izin Pendirian Satuan Pendidikan</h1>
        </header>

        {{-- select --}}

        {{-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Select an option</label>
        <select id="countries" class="w-[1000px] py-4 px-3 border border-black rounded-md shadow-lg">
            <option selected>Pilih Peruntukan</option>
            <option value="TK">Daftar Ulang Izin Operasional Satuan Pendidikan TK</option>
            <option value="SD">Daftar Ulang Izin Operasional Satuan Pendidikan SD</option>
            <option value="SMP">Daftar Ulang Izin Operasional Satuan Pendidikan SMP</option>
        </select> --}}

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
            @include('landing-page.izin-pendirian.table-tk')
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

@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            let params = new URLSearchParams(window.location.search);
            Alpine.data("select", () => ({
                open: false,
                peruntukan: "",

                toggle() {
                    this.open = !this.open;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;

                    if (val === 'tk') {
                        params.set('peruntukan', 'tk')
                        window.location.search = params
                    } else if (val === "sd") {
                        params.set('peruntukan', 'sd')
                        window.location.search = params
                    } else {
                        params.set('peruntukan', 'smp')
                        window.location.search = params
                    }
                },
            }));
        });
    </script>
@endpush