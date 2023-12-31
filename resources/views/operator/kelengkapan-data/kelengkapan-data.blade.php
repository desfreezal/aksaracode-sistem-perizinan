@extends('operator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('operator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <h1 class="font-bold text-[32px] mb-4">Kelengkapan Data</h1>


                <div class="">
                    <div class="flex items-center mb-12">
                        <label for="pencarian" class="w-24">Pencarian</label>
                        <div x-data="select" class="relative flex-grow" @click.outside="open = false">
                            <button @click="toggle" :class="(open) && 'ring-blue-600'"
                                class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                                <span
                                    x-text="@if (request('peruntukan') === 'daful') 'Daftar Ulang Izin Operasional Satuan Pendidikan'
                        @elseif(request('peruntukan') === 'izin-operasional')
                        'Izin Operasional Satuan Pendidikan'
                        @elseif (request('peruntukan') === 'izin-pendirian')
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

                    <div class="space-y-3">
                        <h1 class="text-xl">Cari Data</h1>

                        <div class="flex items-center gap-3">
                            <input type="text" class="flex-grow rounded border border-primary focus:border-primary ">
                            <button class="px-5 py-2 bg-primary hover:bg-primary-light text-white rounded-lg">Cari</button>
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
                    </div>

                    <div id="container" class="mt-10 space-y-8">
                        <a href="{{ route('operator-kelengkapan-detail', ['id' => 1]) }}" class="block">
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
                        </a>
                        <a href="{{ route('operator-kelengkapan-detail', ['id' => 2]) }}" class="block">
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
                        </a>
                    </div>
                </div>
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
                peruntukan: "",

                toggle() {
                    this.open = !this.open;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;
                    params.set('peruntukan', val)
                    window.location.search = params
                },
            }));
        });
    </script>
@endpush
