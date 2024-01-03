@extends('pemohon.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('pemohon.izin-pendirian.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">
                <div class="mb-9">
                    {!! Breadcrumbs::render('pemohon-izin-pendirian', $peruntukan = request('peruntukan')) !!}
                </div>

                {{-- CONTENT --}}
                <div class="py-3 pl-11 border border-primary rounded-md mb-9">
                    <h1 class="text-primary font-medium text-2xl">Mohon untuk memasukkan data sesuai dengan data terupdate
                    </h1>
                </div>
                <form action="{{ url('/dashboard-pemohon/izin-pendirian/upload-berkas') }}" method="GET"
                    class="w-full space-y-6">

                    <input type="hidden" name="peruntukan" value="{{request('peruntukan')}}">

                    <div class="flex items-center">
                        <label for="namayayasan" class="w-72">Nama Yayasan / CV/ PT/ Perorangan</label>
                        <input id="namayayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="namayayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="alamatyayasan" class="w-72">Alamat Yayasan</label>
                        <input id="alamatyayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatyayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="tlpyayasan" class="w-72">Telepon Yayasan</label>
                        <input id="tlpyayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tlpyayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="emailyayasan" class="w-72">Email Yayasan</label>
                        <input id="emailyayasan" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="emailyayasan">
                    </div>
                    <div class="flex items-center">
                        <label for="jenbadhuk" class="w-72">Jenis Badan Hukum</label>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="jenbadhuk" id="yayasan" value="yayasan"
                                    class="w-5 h-5 border-abu-abu">
                                <label for="yayasan">Yayasan</label>
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="radio" name="jenbadhuk" id="pt" value="pt"
                                    class="w-5 h-5 border-abu-abu">
                                <label for="pt">PT</label>
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="radio" name="jenbadhuk" id="cv" value="cv"
                                    class="w-5 h-5 border-abu-abu">
                                <label for="cv">CV</label>
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="radio" name="jenbadhuk" id="lainnya" class="w-5 h-5 border-abu-abu"
                                    value="lainnya">
                                <label for="lainnya">lainnya</label>
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center">
                        <label for="rwsekolah" class="w-72">RW Sekolah</label>
                        <input id="rwsekolah" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="rwsekolah">
                    </div>
                    <div class="flex items-center">
                        <label for="thnberdiri" class="w-72">Tahun Berdiri</label>
                        <input id="thnberdiri" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="thnberdiri">
                    </div>
                    <div class="flex items-center">
                        <label for="tglsk" class="w-72">Tanggal SK Menkumham</label>
                        <input id="tglsk" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglsk">
                    </div>

                    <div class="flex items-center">
                        <label for="nosk" class="w-72">No SK Menkumham RI</label>
                        <input id="nosk" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nosk">
                    </div>
                    <div class="flex items-center">
                        <label for="nopengnotaris" class="w-72">No Pengesahan Notaris</label>
                        <input id="nopengnotaris" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nopengnotaris">
                    </div>
                    <div class="flex items-center">
                        <label for="tglaktanotaris" class="w-72">Tanggal Akta Notaris</label>
                        <input id="tglaktanotaris" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tglaktanotaris">
                    </div>
                    <div class="flex items-center">
                        <label for="namanotaris" class="w-72">Nama Notaris</label>
                        <input id="namanotaris" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="namanotaris">
                    </div>
                    <div class="flex items-center">
                        <label for="alamatnotaris" class="w-72">Alamat Notaris</label>
                        <input id="alamatnotaris" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="alamatnotaris">
                    </div>
                    <div class="flex items-center">
                        <label for="namapemilik" class="w-72">Nama Pemilik / Ketua Yayasan</label>
                        <input id="namapemilik" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="namapemilik">
                    </div>
                    <div class="flex items-center">
                        <label for="nikpemilik" class="w-72">NIK Pemilik / Ketua Yayasan</label>
                        <input id="nikpemilik" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="nikpemilik">
                    </div>
                    <div class="flex items-center">
                        <label for="agamapemilik" class="w-72">Agama Pemilik</label>
                        <input id="agamapemilik" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="agamapemilik">
                    </div>
                    <div class="flex items-center">
                        <label for="askot" class="w-72">Asal Kota</label>
                        <input id="askot" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="askot">
                    </div>
                    <div class="flex items-center">
                        <label for="tlppemilik" class="w-72">Telepon Pemilik</label>
                        <input id="tlppemilik" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="tlppemilik">
                    </div>
                    <div class="flex items-center">
                        <label for="kewargapemilik" class="w-72">Kewarganegaraan Pemilik</label>
                        <input id="kewargapemilik" type="text" class="flex-grow text-edu-black border-abu-abu rounded"
                            name="kewargapemilik">
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

            // const peruntukanValue = document.getElementById('peruntukan').value
            // if (peruntukanValue === '') {
            //     alert('Pilih Sub Perizinan')
            //     return
            // }

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
