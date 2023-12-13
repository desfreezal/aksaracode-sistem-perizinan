@extends('landing-page.layout')

@section('title')
    Daftar Ulang
@endsection

@section('content')
    <div class="w-full">

        {{-- header --}}
        <header class="bg-primary px-11 flex items-center gap-x-11 py-2 rounded-md mb-[21px]">
            <img src="{{ asset('home/img/Folder.png') }}" class="w-11" alt="">
            <h1 class="font-medium text-3xl text-white">Daftar Ulang Izin Operasional Satuan Pendidikan</h1>
        </header>

        {{-- select --}}

        {{-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
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
                    x-text="@if (request('peruntukan') === 'tk') 'Daftar Ulang Izin Operasional Satuan Pendidikan TK'
                @elseif(request('peruntukan') === 'sd')
                'Daftar Ulang Izin Operasional Satuan Pendidikan SD'
                @else 
                'Daftar Ulang Izin Operasional Satuan Pendidikan SMP' @endif"></span>
                <i class="fas fa-chevron-down text-xl"></i>
            </button>

            <ul class="z-2 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('tk')">Daftar Ulang Izin
                    Operasional Satuan Pendidikan TK</li>
                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('sd')">Daftar Ulang Izin
                    Operasional Satuan Pendidikan SD</li>
                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('smp')">Daftar Ulang Izin
                    Operasional Satuan Pendidikan SMP</li>
            </ul>
        </div>
    </div>

    @if (request('peruntukan') === 'tk')
        <div>ini tk</div>
    @elseif(request('peruntukan' === 'sd'))
        <div>ini sd</div>
    @else
        <div>ini smp</div>
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
