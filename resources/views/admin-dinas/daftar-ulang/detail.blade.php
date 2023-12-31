@extends('admin-dinas.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.daftar-ulang.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">
                <div class="mb-9">
                    {!! Breadcrumbs::render('admin-dinas-detail-daftar', $peruntukan = request('peruntukan')) !!}
                </div>

                {{-- CONTENT --}}
                <div class="py-3 pl-11 border border-primary rounded-md mb-9">
                    <h1 class="text-primary font-medium text-2xl">Mohon untuk memasukkan data sesuai dengan data terupdate
                    </h1>
                </div>

                <form action="{{ url('/dashboard-admin-dinas/daftar-ulang/berkas') }}" method="GET" class="w-full space-y-6" id="form">
                    <div class="flex items-center">
                        <label for="jenid" class="w-72">Satuan Pendidikan</label>
                        <div x-data="select" class="relative flex-grow" @click.outside="open = false">
                            <button type="button" @click="toggle" :class="(open) && 'ring-blue-600'"
                                class="flex w-full items-center justify-between rounded bg-white p-2 ring-1 ring-gray-300">
                                <span
                                    x-text="detail !== '' ? detail : 'Daftar Ulang Izin Operasional Satuan Pendidikan {{ Str::upper(request('peruntukan')) }}'"></span>
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
                    <input type="text" id="peruntukan" name="peruntukan" hidden value="{{ request('peruntukan') }}">
                    <div class="flex items-center">
                        <label for="alamatsekolah" class="w-72">Alamat Sekolah</label>
                        <input id="alamatsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatsekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="kecamatansekolah" class="w-72">Kecamatan Sekolah</label>
                        <input id="kecamatansekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kecamatansekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="kelurahansekolah" class="w-72">Kelurahan Sekolah</label>
                        <input id="kelurahansekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kelurahansekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="rtsekolah" class="w-72">RT Sekolah</label>
                        <input id="rtsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="rtsekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="rwsekolah" class="w-72">RW Sekolah</label>
                        <input id="rwsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="rwsekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="namayayasan" class="w-72">Nama Yayasan</label>
                        <input id="namayayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="namayayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="alamatyayasan" class="w-72">Alamat Yayasan</label>
                        <input id="alamatyayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatyayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="ketuayayasan" class="w-72">Ketua Yayasan</label>
                        <input id="ketuayayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="ketuayayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="izinoperasional" class="w-72">Izin Operasional dikeluarkan Oleh</label>
                        <input id="izinoperasional" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="izinoperasional">
                    </div>
                    <div class="flex items-center">
                        <label for="noizinoperasional" class="w-72">No Izin Operasional</label>
                        <input id="noizinoperasional" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded" name="noizinoperasional">
                    </div>
                    <div class="flex items-center">
                        <label for="tanggaloperasional" class="w-72">Tanggal Operasional</label>
                        <input id="tanggaloperasional" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded" name="tanggaloperasional">
                    </div>
                    <div class="flex items-center">
                        <label for="jenisoperasional" class="w-72">Jenis Operasional</label>
                        <input id="jenisoperasional" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded" name="jenisoperasional">
                    </div>
                    <div class="flex items-center">
                        <label for="nosuratadmin-dinas" class="w-72">No Surat admin-dinas</label>
                        <input id="nosuratadmin-dinas" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nosuratadmin-dinas">
                    </div>

                    <div class="flex items-center">
                        <label for="tglsuratadmin-dinas" class="w-72">Tanggal Surat admin-dinas</label>
                        <input id="tglsuratadmin-dinas" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded" name="tglsuratadmin-dinas">
                    </div>

                    <div class="flex items-center">
                        <label for="tglakreditasi" class="w-72">Tanggal Akreditasi</label>
                        <input id="tglakreditasi" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglakreditasi">
                    </div>

                    <div class="flex items-center">
                        <label for="noakreditasi" class="w-72">No Akreditasi</label>
                        <input id="noakreditasi" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="noakreditasi">
                    </div>

                    <div class="flex items-center">
                        <label for="akreditasi" class="w-72">Akreditasi</label>
                        <input id="akreditasi" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="akreditasi">
                    </div>

                    <div class="flex items-center">
                        <label for="jensekolah" class="w-72">Jenis Sekolah</label>
                        <input id="jensekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="jensekolah">
                    </div>



                    <div class="flex gap-x-12 justify-end items-center">
                        <button id="simpan" data-modal-target="error-modal" data-modal-toggle="error-modal"
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

            const inputs = document.querySelectorAll('input')

            // closemodal onclick or modal hidden send form
            const closeModal = document.getElementById('closeModal')
            // send form
            const form = document.getElementById('form')
            // check jika form ada yang kosong
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
