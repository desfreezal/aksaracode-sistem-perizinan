@extends('operator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('operator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="wrapper space-y-9">
                    <div class="space-y-2">
                        <h1 class="font-semibold text-xl">Panduan Perizinan</h1>
                        <div class="flex items-center gap-x-8">
                            <a href="{{ route('operator-panduan-daftar-ulang') }}">
                                <div class="w-[265px] py-5 pl-5 pr-12 shadow-xl flex items-center gap-x-8 rounded-lg">
                                    <img src="{{ asset('home/img/Folder.png') }}" alt="validasi"
                                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                    <p class="font-medium text-base">Daftar Ulang Izin Operasional Satuan Pendidikan</p>
                                </div>
                            </a>
                            <a href="{{ route('operator-lacak-permohonan') }}">
                                <div class="w-[265px] py-5 pl-5 shadow-xl flex items-center gap-x-8 rounded-lg">
                                    <img src="{{ asset('home/img/School.png') }}" alt="validasi"
                                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                    <p class="font-medium text-base">Izin Pendirian Satuan Pendidikan</p>
                                </div>
                            </a>
                            <a href="{{ route('operator-lacak-permohonan') }}">
                                <div class="w-[265px] py-5 pl-5 shadow-xl flex items-center gap-x-8 rounded-lg">
                                    <img src="{{ asset('home/img/Compliant.png') }}" alt="validasi"
                                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                                    <p class="font-medium text-base">Izin Operasional Satuan Pendidikan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
@endsection
