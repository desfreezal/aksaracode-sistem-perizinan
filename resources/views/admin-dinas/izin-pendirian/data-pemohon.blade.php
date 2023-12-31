@extends('admin-dinas.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.izin-pendirian.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="mb-9">
                    {!! Breadcrumbs::render('admin-dinas-daftar-ulang') !!}
                </div>
                {{-- CONTENT --}}
                <div class="py-3 pl-11 border border-primary rounded-md mb-9">
                    <h1 class="text-primary font-medium text-2xl">Mohon untuk memasukkan data sesuai dengan data terupdate
                    </h1>
                </div>

                <form action="{{ url('/dashboard-admin-dinas/izin-pendirian/detail-yayasan') }}" method="GET" class="w-full space-y-6" id="form">
                    <div class="flex items-center">
                        <label for="jenid" class="w-72">Sub Perizinan</label>
                        <div x-data="select" class="relative flex-grow" @click.outside="open = false">
                            <button type="button" @click="toggle" :class="(open) && 'ring-blue-600'"
                                class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                                <span x-text="detail || 'Pilih Peruntukan'"></span>
                                <i class="fas fa-chevron-down text-xl"></i>
                            </button>

                            <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('tk')">
                                    Daftar Ulang Izin
                                    Operasional Satuan Pendidikan TK</li>
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('sd')">
                                    Daftar Ulang Izin
                                    Operasional Satuan Pendidikan SD</li>
                                <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('smp')">
                                    Daftar Ulang Izin
                                    Operasional Satuan Pendidikan SMP</li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" id="peruntukan" name="peruntukan" hidden>
                    <div class="flex items-center">
                        <label for="nik" class="w-72">NIK admin-dinas</label>
                        <input id="nik" type="number" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nik">
                    </div>
                    <div class="flex items-center">
                        <label for="nama" class="w-72">Nama admin-dinas</label>
                        <input id="nama" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nama">
                    </div>
                    <div class="flex items-center">
                        <label for="jenkel" class="w-72">Jenis Kelamin</label>
                        <input id="jenkel" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="jenkel">
                    </div>
                    <div class="flex items-center">
                        <label for="kabupaten" class="w-72">Kabupaten</label>
                        <input id="kabupaten" type="text" class="flex-grow text-edu-black border-abu-abu rounded" name="kabupaten">
                    </div>
                    <div class="flex items-center">
                        <label for="jenkel" class="w-72">Jenis Kelamin</label>
                        <input id="jenkel" type="text" class="flex-grow text-edu-black border-abu-abu rounded" name="jenkel">
                    </div>
                    <div class="flex items-center">
                        <label for="kecamatan" class="w-72">Kecamatan</label>
                        <input id="kecamatan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kecamatan">
                    </div>
                    <div class="flex items-center">
                        <label for="kelurahan" class="w-72">Kelurahan</label>
                        <input id="kelurahan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kelurahan">
                    </div>
                    <div class="flex items-center">
                        <label for="alamat" class="w-72">Alamat admin-dinas</label>
                        <input id="alamat" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamat">
                    </div>
                    <div class="flex items-center">
                        <label for="alamatdomisili" class="w-72">Alamat Domisili admin-dinas</label>
                        <input id="alamatdomisili" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatdomisili">
                    </div>
                    <div class="flex items-center">
                        <label for="tempatlahir" class="w-72">Tempat Lahir admin-dinas</label>
                        <input id="tempatlahir" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tempatlahir">
                    </div>
                    <div class="flex items-center">
                        <label for="tanggallahir" class="w-72">Tanggal Lahir admin-dinas</label>
                        <input id="tanggallahir" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tanggallahir">
                    </div>
                    <div class="flex items-center">
                        <label for="nohp" class="w-72">No. Handphone admin-dinas</label>
                        <input id="nohp" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nohp">
                    </div>
                    <div class="flex items-center">
                        <label for="pekerjaan" class="w-72">Pekerjaan admin-dinas</label>
                        <input id="pekerjaan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="pekerjaan">
                    </div>

                    <div class="flex gap-x-12 justify-end items-center">
                        <button id="simpan" data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="px-12 py-[5px] rounded-3xl font-semibold text-xl  hover:bg-primary-light bg-primary text-white">
                            Simpan Data
                        </button>
                    </div>
                </form>

                {{-- MODAL --}}
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
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
                                    <img src="{{ asset('admin-dinas/img/Check.png') }}" alt="check" class="w-20 mb-6">

                                    <h1 class="font-bold text-3xl text-edu-black">Berhasil Menyimpan Data</h1>

                                    <p class="font-thin text-edu-black">Data yang dimasukkan berhasil disimpan</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl bg-primary hover:bg-primary-light text-white ">OK</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="error-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 rounded-t ">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="error-modal">
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
                                    <img src="{{ asset('admin-dinas/img/Cancel.png') }}" alt="cancel" class="w-20 mb-6">

                                    <h1 class="font-bold text-3xl text-edu-black">Gagal Menyimpan Data</h1>

                                    <p class="font-thin text-edu-black">Periksa Kembai Data yang Anda Masukkan</p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                <button data-modal-hide="error-modal" type="button" id="closeModal"
                                    data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="py-1 px-12 rounded-3xl bg-primary hover:bg-primary-light text-white ">OK</button>
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
        document.addEventListener("alpine:init", () => {
            const inputPeruntukan = document.getElementById('peruntukan')

            let params = new URLSearchParams(window.location.search);
            Alpine.data("select", () => ({
                open: false,
                peruntukan: "",
                detail: "",

                toggle() {
                    this.open = !this.open;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;

                    if (val === 'tk') {
                        params.set('peruntukan', 'tk')
                        // window.location.search = params
                        inputPeruntukan.value = 'tk'
                        this.detail = 'Daftar Ulang Izin Operasional Satuan Pendidikan TK'
                    } else if (val === "sd") {
                        params.set('peruntukan', 'sd')
                        // window.location.search = params
                        inputPeruntukan.value = 'sd'
                        this.detail = 'Daftar Ulang Izin Operasional Satuan Pendidikan SD'
                    } else {
                        params.set('peruntukan', 'smp')
                        // window.location.search = params
                        inputPeruntukan.value = 'smp'
                        this.detail = 'Daftar Ulang Izin Operasional Satuan Pendidikan SMP'
                    }
                },
            }));
        });
        // INIT ALPINEJS PALING ATAS


        const formHeight = document.getElementById('content').offsetHeight; // Mendapatkan tinggi form
        const sidebar = document.getElementById('sidebar'); // Ganti 'sidebar' dengan id yang sesuai
        sidebar.style.height = formHeight + 'px';
        // PENTING DI ATAS, JANGAN DI HAPUS


        const simpanBtn = document.getElementById('simpan')

        simpanBtn.addEventListener('click', (event) => {
            event.preventDefault()

            const peruntukanValue = document.getElementById('peruntukan').value
            if(peruntukanValue === '') {
                alert('Pilih Sub Perizinan')
                return
            }

            // closemodal onclick or modal hidden send form
            const closeModal = document.getElementById('closeModal')
            // send form
            const form = document.getElementById('form')
            closeModal.addEventListener('click', () => {
                form.submit()
            })

            const modal = document.getElementById('default-modal')
            // detect when modal hidden
            modal.addEventListener('click', () => {
                form.submit()
            })
        })
    </script>
@endpush
