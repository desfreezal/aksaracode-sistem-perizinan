@extends('kepala-dinas.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('kepala-dinas.sidebar')

            <div class="flex-grow w-full h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="py-3 pl-11 rounded-md mb-9 bg-primary">
                    <h1 class="font-medium text-2xl text-white">Pastikan data yang di upload sesuai dengan persyaratan
                    </h1>
                </div>

                @include('kepala-dinas.berkas-izin-pendirian.table-tk', ['page' => 'kel-data'])

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
