@extends('surveyor.layout')

@php
    $data = [
        [
            'izin' => 'Izin Operasional Satuan Pendidikan',
            'id' => 1234589,
        ],
        [
            'izin' => 'Izin Pendirian Satuan Pendidikan',
            'id' => 1245099,
        ],
        [
            'izin' => 'Daftar Ulang Izin Operasional Satuan Pendidikan',
            'id' => 2355799,
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
                    <img src="{{ asset('surveyor/img/notif white.png') }}" alt="valid"
                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                    <h1 class="font-medium text-xl">Notifikasi</h1>
                </div>
                {{-- END HEADER --}}


                {{-- START KONTEN --}}
                <div class="space-y-3">

                    @foreach ($data as $item)
                        <div class="rounded-lg flex items-center gap-x-8 px-5 py-6 shadow-xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" data-slot="icon" class="w-9 h-9 text-primary font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <div>
                                <h1 class="font-semibold text-lg">{{ $item['izin'] }}</h1>
                                <p class="text-sm">ID {{ $item['id'] }} mengajukan permohonan </p>

                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- END KONTEN --}}
            </div>
        </div>
    </div>
@endsection
