@extends('verifikator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('verifikator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="mt-10">
                    <div class="flex justify-between items-center text-primary">
                        <h1 class="font-semibold text-xl">Oksana Khoirunnida</h1>
                        <h1 class="font-semibold text-base">007524</h1>
                    </div>

                    <div class="mt-5">
                        <h1>Foto Hasil Survey</h1>

                        <div class="flex justify-between items-center text-primary mt-5">
                            <h1 class="text-black">Survey desa jabung.jpg</h1>
                            <a href="" class="px-8 py-4 rounded-full border-2 border-black font-semibold">Lihat</a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <form action="" id="validasi-data">
                            <h1 class="font-bold">Tulis Komentar</h1>

                            <textarea name="komentar" id="" class="w-full rounded-xl border-primary" rows="5"></textarea>
                        </form>
                    </div>
                </div>

                <div class="justify-center items-center flex mt-16 space-x-10">
                    <button data-modal-target="tolak-modal" data-modal-toggle="tolak-modal"
                        class="py-3 w-48 block mr-10 text-center border-2 rounded-lg border-font-merah text-font-merah bg-bg-merah">Tolak</button>

                    <button data-modal-target="validasi-modal" data-modal-toggle="validasi-modal"
                        class="py-3 w-48 block text-center border-2 rounded-lg text-font-hijau bg-bg-hijau border-font-hijau">Validasi</button>
                </div>

                {{-- MODAL --}}
                <div id="validasi-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <div class="flex flex-col justify-center items-center space-x-4">

                                    <h1 class="font-bold text-xl text-primary mb-3">Konfirmasi Validasi Survey</h1>

                                    <p class="font-thin text-edu-black">Apakah yakin ingin menyimpan jadwal
                                        survey?</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex gap-x-11 items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="validasi-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl text-black hover:bg-abu-abu ">Tutup</button>


                                <button data-modal-hide="validasi-modal" type="button" id="konfirmasi"
                                    class="py-1 px-12 rounded-3xl text-primary">Konfirmasi</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MODAL --}}
                <div id="tolak-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <div class="flex flex-col justify-center items-center space-x-4">

                                    <h1 class="font-bold text-xl text-primary mb-3">Tolak Validasi Survey</h1>

                                    <p class="font-thin text-edu-black">Apakah yakin anda ingin menolak data ini??</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex gap-x-11 items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="tolak-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl text-black hover:bg-abu-abu ">Tutup</button>


                                <button data-modal-hide="tolak-modal" type="button" id="tolak"
                                    class="py-1 px-12 rounded-3xl text-primary">Konfirmasi</button>
                            </div>
                        </div>
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
        const tolak = document.getElementById('tolak');
        const form = document.getElementById('validasi-data');

        konfirmasi.addEventListener('click', function() {
            form.submit();
        })

        tolak.addEventListener('click', function() {
            form.submit();
        })
    </script>
@endpush
