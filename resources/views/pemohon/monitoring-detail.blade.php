@extends('pemohon.layout')

@php
    // $data = [
    //     [
    //         'Nama Pemohon' => 'Jane ',
    //         'Tanggal' => '06/11/2023',
    //         'Status Dokumen' => 'Selesai',
    //     ],
    //     [
    //         'Nama Pemohon' => 'Jauza',
    //         'Tanggal' => '06/11/2023',
    //         'Status Dokumen' => 'Diproses',
    //     ],
    //     [
    //         'Nama Pemohon' => 'Akbar',
    //         'Tanggal' => '06/11/2023',
    //         'Status Dokumen' => 'Diproses',
    //     ],
    //     [
    //         'Nama Pemohon' => 'Faiza',
    //         'Tanggal' => '06/11/2023',
    //         'Status Dokumen' => 'Diproses',
    //     ],
    // ];
@endphp

@section('content')
    <div class=" h-full">

        {{-- @dd($type, $data) --}}

        <div class="flex">
            {{-- SIDEBAR --}}
            {{-- @include('pemohon.sidebar') --}}

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="space-y-9 h-[26rem] overflow-scroll">
                    <h1 class="font-bold text-3xl">Monitoring</h1>

                    <div class="w-full space-y-[6px]">
                        {{-- HEADER --}}
                        <div class="flex items-center text-center gap-x-[6px] text-primary font-semibold text-lg">
                            <h1 class="bg-header-table w-1/3 border border-primary rounded-md py-2">Nama Pemohon</h1>
                            <h1 class="bg-header-table w-1/3 border border-primary rounded-md py-2">Tanggal</h1>
                            <h1 class="bg-header-table w-1/3 border border-primary rounded-md py-2">Status Dokumen</h1>
                        </div>

                    </div>

                    @if ($type === 'daftar-ulang')
                        {{-- DATA --}}
                        @forelse ($data as $item)
                            <div class="flex items-center text-center gap-x-[6px] text-primary text-lg">
                                <h1 class=" w-1/3  rounded-md py-2">{{ Auth::user()->name }}</h1>
                                <h1 class=" w-1/3 rounded-md py-2">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y') }}
                                </h1>
                                <h1 class=" w-1/3  rounded-md py-2">
                                    Diproses
                                </h1>
                            </div>
                        @empty
                            <h1 class="text-center mt-5 text-primary">Tidak Ada Data Daftar Ulang</h1>
                        @endforelse
                    @elseif ($type === 'izin-pendirian')
                        {{-- DATA --}}
                        @forelse ($data as $item)
                            <div class="flex items-center text-center gap-x-[6px] text-primary text-lg">
                                <h1 class=" w-1/3  rounded-md py-2">{{ Auth::user()->name }}</h1>
                                <h1 class=" w-1/3 rounded-md py-2">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y') }}
                                </h1>
                                <h1 class=" w-1/3  rounded-md py-2">
                                    Diproses
                                </h1>
                            </div>
                        @empty
                            <h1 class="text-center mt-5 text-primary">Tidak Ada Data Izin Pendirian</h1>
                        @endforelse
                    @elseif ($type === 'izin-operasional')
                        {{-- DATA --}}
                        @forelse ($data as $item)
                            <div class="flex items-center text-center gap-x-[6px] text-primary text-lg">
                                <h1 class=" w-1/3  rounded-md py-2">{{ Auth::user()->name }}</h1>
                                <h1 class=" w-1/3 rounded-md py-2">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y') }}
                                </h1>
                                <h1 class=" w-1/3  rounded-md py-2">
                                    Diproses
                                </h1>
                            </div>
                        @empty
                            <h1 class="text-center mt-5 text-primary">Tidak Ada Data Izin Operasional</h1>
                        @endforelse
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
