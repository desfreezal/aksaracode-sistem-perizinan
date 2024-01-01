@extends('verifikator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('verifikator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="flex items-center gap-4 mb-10 text-primary">
                    <a href="{{ route('verifikator-pembaruan-data') }}" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>

                        <h1 class="font-bold text-[20px]">Perbaiki Dokumen</h1>
                    </a>
                </div>

                <div class="mt-16 space-y-4">
                    <div class="flex justify-between items-center text-primary font-semibold text-3xl">
                        <h1>Oksana Khoirunnida</h1>
                        <h1>007524</h1>
                    </div>

                    <div class="flex justify-between items-center text-2xl font-light">
                        <h1>Update Terakhir</h1>
                        <h1 class="text-[#D77B78]">08/11/2023 - 16:59:10</h1>
                    </div>
                </div>

                <form action="{{ route('verifikator-pembaruan-data') }}">
                    <div class="space-y-6 mt-12">
                        <h1 class="block font-semibold text-2xl">Nama Dokumen</h1>

                        <div class="flex items-center justify-between">
                            <input type="file" name="" id="dok">
                            <label for="dok" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                </svg>
                            </label>
                        </div>

                        <div class="space-y-2 pt-5 max-w-md">
                            <h1 class="block font-semibold text-2xl">Komentar</h1>
                            <p class="font-light text-xl">Kurang berisi kop dan tanda tangan camat . Serta
                                typo pada bagian nama kepala desa</p>
                        </div>
                    </div>

                    <div class="mt-28 mx-auto text-center">
                        <button type="submit"
                            class="font-medium text-2xl text-primary py-2 max-w-lg w-full border border-primary hover:bg-primary hover:text-white rounded-lg">Kirim
                            Dokumen Perbaikan</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
