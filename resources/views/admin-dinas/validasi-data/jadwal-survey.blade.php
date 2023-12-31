@extends('admin-dinas.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <form action="" class="w-full" id="form-jadwal">

                    <div class="space-y-16 mt-20">
                        <div class="flex items-center">
                            <label for="nama_surveyor" class="w-40 pr-4">Nama Surveyor</label>
                            <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nama_surveyor"
                                id="nama_surveyor">
                        </div>


                        <div class="flex items-center">
                            <label for="tgl_survey" class="w-40">Tanggal Survey</label>
                            <input type="date" class="flex-grow rounded-xl border-2 border-primary" name="tgl_survey"
                                id="tgl_survey">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="ml-2 w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                    </div>

                    <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal"
                        class="block mt-52 py-3 text-center w-[460px] mx-auto border-2 border-primary rounded-lg hover:bg-primary hover:text-white text-primary">Atur
                        Jadwal
                        Survey</button>
                </form>


                {{-- MODAL --}}
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <div class="flex flex-col justify-center items-center space-x-4">

                                    <h1 class="font-bold text-xl text-primary mb-3">Simpan Jadwal Survey</h1>

                                    <p class="font-thin text-edu-black">Apakah yakin ingin menyimpan jadwal
                                        survey?</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex gap-x-11 items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl text-black hover:bg-abu-abu ">Tutup</button>


                                <button data-modal-hide="default-modal" type="button"  id="konfirmasi"
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

        const form = document.getElementById('form-jadwal');

        konfirmasi.addEventListener('click', function() {
            form.submit();
        })
    </script>
@endpush
