@extends('pemohon.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('pemohon.izin-operasional.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">
                {{-- CONTENT --}}
                <div class="py-3 pl-11 border border-primary rounded-md mb-9">
                    <h1 class="text-primary font-medium text-2xl">Mohon untuk memasukkan data sesuai dengan data terupdate
                    </h1>
                </div>

                <form action="{{ route('pemohon-berkas-operasional') }}" method="GET" class="w-full space-y-6">
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
                        <label for="alamatsekolah" class="w-72">Alamat Sekolah</label>
                        <input id="alamatsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatsekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="kecsekolah" class="w-72">Kecamatan Sekolah</label>
                        <input id="kecsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kecsekolah">
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
                        <label for="namayysn" class="w-72">Nama Yayasan</label>
                        <input id="namayysn" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="namayysn">
                    </div>
                    <div class="flex items-center">
                        <label for="alamatyysn" class="w-72">Alamat Yayasan</label>
                        <input id="alamatyysn" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatyysn">
                    </div>
                    <div class="flex items-center">
                        <label for="ketuayysn" class="w-72">Ketua Yayasan</label>
                        <input id="ketuayysn" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="ketuayysn">
                    </div>
                    <div class="flex items-center">
                        <label for="nosuratpemohon" class="w-72">No Surat Pemohon</label>
                        <input id="nosuratpemohon" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nosuratpemohon">
                    </div>
                    <div class="flex items-center">
                        <label for="tglsuratpemohon" class="w-72">Tanggal Surat Pemohon</label>
                        <input id="tglsuratpemohon" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglsuratpemohon">
                    </div>
                    <div class="flex items-center">
                        <label for="skpendirianby" class="w-72">SK Pendirian Dikeluarkan Oleh</label>
                        <input id="skpendirianby" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="skpendirianby">
                    </div>
                    <div class="flex items-center">
                        <label for="noskpendirian" class="w-72">No SK Pendirian</label>
                        <input id="noskpendirian" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="noskpendirian">
                    </div>
                    <div class="flex items-center">
                        <label for="tglizinpendirian" class="w-72">Tanggal Penetapan Izin Pendirian</label>
                        <input id="tglizinpendirian" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglizinpendirian">
                    </div>
                    <div class="flex items-center">
                        <label for="tglmulaiskpendirian" class="w-72">Tanggal Mulai Berlaku SK <br> Pendirian</label>
                        <input id="tglmulaiskpendirian" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglmulaiskpendirian">
                    </div>
                    <div class="flex items-center">
                        <label for="no_operasional_lama" class="w-72">No Izin Operasional Lama</label>
                        <input id="no_operasional_lama" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="no_operasional_lama">
                    </div>
                    <div class="flex items-center">
                        <label for="tglmulaioperasional_lama" class="w-72">Tanggal Mulai Izin Operasional <br> Lama</label>
                        <input id="tglmulaioperasional_lama" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglmulaioperasional_lama">
                    </div>
                    <div class="flex items-center">
                        <label for="tglakhiroperasional_lama" class="w-72">Tanggal Berakhir Izin Operasional <br> Lama</label>
                        <input id="tglakhiroperasional_lama" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglakhiroperasional_lama">
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
                        <label for="jns_sekolah" class="w-72">Jenis Sekolah</label>
                        <input id="jns_sekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="jns_sekolah">
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
                                    <img src="{{ asset('pemohon/img/Check.png') }}" alt="check" class="w-20 mb-6">

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
                                    <img src="{{ asset('pemohon/img/Cancel.png') }}" alt="cancel" class="w-20 mb-6">

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

            // PERUNTUKAN HARUS ISI
            const peruntukanValue = document.getElementById('peruntukan').value
            if(peruntukanValue === '') {
                alert('Pilih Sub Perizinan')
                return
            }

            // closemodal onclick or modal hidden send form
            const closeModal = document.getElementById('closeModal')
            // send form
            const form = document.querySelector('form')
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
