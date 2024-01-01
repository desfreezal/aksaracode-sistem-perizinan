@extends('surveyor.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('surveyor.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="space-y-9 mb-16">

                    <div class="flex items-center">
                        <label for="" class="w-44">Filter Data</label>
                        <div x-data="select" class="relative flex-grow" @click.outside="open = false">
                            <button @click="toggle" :class="(open) && 'ring-blue-600'"
                                class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                                <span
                                    x-text="@if (request('layanan') === 'daful') 'Daftar Ulang Izin Operasional Satuan Pendidikan'
                        @elseif(request('layanan') === 'izin-operasional')
                        'Izin Operasional Satuan Pendidikan'
                        @elseif (request('layanan') === 'izin-pendirian')
                        'Izin Pendirian Satuan Pendidikan'
                        @else
                        'Pilih Layanan' @endif"></span>
                                <i class="fas fa-chevron-down text-xl"></i>
                            </button>

                            <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                    @click="setPeruntukan('daful')">
                                    Daftar Ulang Izin Operasional Satuan Pendidikan</li>
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                    @click="setPeruntukan('izin-pendirian')">
                                    Izin Pendirian Satuan Pendidikan</li>
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200"
                                    @click="setPeruntukan('izin-operasional')">
                                    Izin Operasional Satuan Pendidikan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center gap-6">
                        <h1 class="font-bold text-sm">Tampilkan</h1>
                        <select name="jumlah" id="jumlah" class="rounded-2xl py-0">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                        <h1 class="font-bold text-sm">data</h1>
                    </div>
                </div>

                <div id="container" class="mt-10 space-y-8">
                    {{-- CARD --}}

                    @if (request('layanan'))
                        <div class="flex gap-5">
                            <div
                                class="flex-grow shadow-lg rounded-lg border border-[#E5DBDB] bg-[#FBFBFB] px-3 py-4 space-y-4">
                                <div class="flex justify-between items-center text-primary">
                                    <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                                    <h1 class="font-semibold text-base">007524</h1>
                                </div>
                                <h1>Daftar Ulang Izin Operasional Satuan Pendidikan SD</h1>
                                <p class="text-[#D77B78]">08/11/2023 - 16:59:10</p>

                                <a href="{{ route('surveyor-detail-pembaruan-data', ['id'=>1]) }}" class="block group">
                                    <div
                                        class="w-full rounded-md border-primary text-primary text-center border py-2 hover:bg-primary hover:text-white">
                                        Perbaiki
                                    </div>
                                </a>
                            </div>

                            <div class="w-[62px] space-y-5">
                                <h1 class="text-center font-bold">Status</h1>

                                <button class="p-3 rounded bg-bg-merah border border-font-merah text-font-merah">Belum
                                    Valid</button>
                            </div>

                        </div>

                        <div class="flex gap-5">
                            <div
                                class="flex-grow shadow-lg rounded-lg border border-[#E5DBDB] bg-[#FBFBFB] px-3 py-4 space-y-4">
                                <div class="flex justify-between items-center text-primary">
                                    <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                                    <h1 class="font-semibold text-base">007524</h1>
                                </div>
                                <h1>Daftar Ulang Izin Operasional Satuan Pendidikan SD</h1>
                                <p class="text-[#D77B78]">08/11/2023 - 16:59:10</p>
                            </div>

                            <div class="w-[62px] space-y-5">
                                <h1 class="text-center font-bold">Status</h1>

                                <button
                                    class="p-3 bg-bg-hijau text-font-hijau border border-font-hijau rounded">Valid</button>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <div
                                class="flex-grow shadow-lg rounded-lg border border-[#E5DBDB] bg-[#FBFBFB] px-3 py-4 space-y-4">
                                <div class="flex justify-between items-center text-primary">
                                    <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                                    <h1 class="font-semibold text-base">007524</h1>
                                </div>
                                <h1>Daftar Ulang Izin Operasional Satuan Pendidikan SD</h1>
                                <p class="text-[#D77B78]">08/11/2023 - 16:59:10</p>
                            </div>

                            <div class="w-[62px] space-y-5">
                                <h1 class="text-center font-bold">Status</h1>

                                <button
                                    class="p-3 bg-bg-hijau text-font-hijau border border-font-hijau rounded">Valid</button>
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            let params = new URLSearchParams(window.location.search);
            Alpine.data("select", () => ({
                open: false,
                openJenval: false,
                peruntukan: "",
                jenval: "",

                toggle() {
                    this.open = !this.open;
                },

                toggleJenval() {
                    this.openJenval = !this.openJenval;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;
                    params.set('layanan', val)
                    window.location.search = params
                },
            }));
        });
    </script>
@endpush
