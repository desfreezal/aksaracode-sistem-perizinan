@extends('admin-dinas.layout')

@php
    $type = explode('-', $id);
@endphp

@section('content')
    <div class="min-h-screen h-full">

        {{-- @foreach ($data->getAttributes() as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach

        @dd() --}}

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow w-full h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="py-3 pl-11 rounded-md mb-9 bg-primary">
                    <h1 class="font-medium text-2xl text-white">Pastikan data yang di upload sesuai dengan persyaratan
                    </h1>
                </div>


                <table
                    class="table-fixed w-full text-sm text-left rtl:text-right text-black border border-black font-normal">
                    <thead class="text-xs uppercase bg-edu-bg">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-16">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Persyaratan
                            </th>
                            <th scope="col" class="px-6 py-3 w-44">

                            </th>
                        </tr>
                    </thead>
                    {{-- BODY --}}
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data->getAttributes() as $key => $value)
                            @if ($loop->iteration > 7 && $loop->iteration < 27)
                                <tr class="odd:bg-white odd:900 even:bg-gray-50 even:800">
                                    <td scope="row" class="px-6 py-4 ">
                                        {{ $no }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>
                                            {{ $key }}
                                        </p>
                                        <br>
                                        <p class="text-primary">Tipe file upload : pdf, jpg, jpeg, png</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="space-y-3">
                                            <label for="file-{{ '-' }}">
                                                <a href="@if ($type[0] === 'A') {{ Storage::url('perizinanPendirian/' . $key . '/' . $value) }}
                                                @elseif($type[0] === 'B')
                                                {{ Storage::url('daftarUlang/' . $key . '/' . $value) }}
                                                    @else 
                                                    {{ Storage::url('operasional/' . $key . '/' . $value) }} @endif"
                                                    target="_blank">
                                                    <div
                                                        class="py-3 px-0 rounded-3xl border border-black text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white text-center">
                                                        Lihat
                                                    </div>
                                                </a>
                                            </label>


                                            <button type="submit" class="block mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-8 h-8 text-[#27C119]">
                                                    <path fill-rule="evenodd"
                                                        d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </button>


                                            <button class="block mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-8 h-8 text-[#EE0F0F]">
                                                    <path fill-rule="evenodd"
                                                        d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </button>

                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $no += 1;
                                @endphp
                            @endif
                        @endforeach


                    </tbody>
                </table>

                {{-- @include('admin-dinas.berkas-izin-pendirian.table-tk', ['page' => 'kel-data']) --}}

                <form action="" method="GET" id="kel-data">
                    <div class="w-full mt-16 flex justify-end">
                        <button type="button" class="py-2 px-10 rounded-2xl bg-primary text-white font-bold"
                            data-modal-target="default-modal" data-modal-toggle="default-modal">Simpan Data</button>
                    </div>
                </form>

                {{-- MODAL --}}
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 rounded-t ">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <div class="flex flex-col justify-center items-center space-x-4">

                                    <h1 class="font-bold text-xl text-primary mb-3">Konfirmasi Kelengkapan Data</h1>

                                    <p class="font-thin text-edu-black">Apakah yakin data anda sudah benar?</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex gap-x-11 items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl text-black hover:bg-abu-abu ">Tutup</button>


                                <button data-modal-hide="default-modal" type="button" id="konfirmasi"
                                    class="py-1 px-12 rounded-3xl text-primary">Konfirmasi</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        // konfirmasi btn
        const konfirmasi = document.getElementById('konfirmasi');

        const form = document.getElementById('kel-data');

        konfirmasi.addEventListener('click', function() {
            form.submit();
        })
    </script>
@endpush
