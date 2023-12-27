@extends('operator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('operator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">
                {{-- START KONTEN --}}
                <form action="{{ route('operator-profile') }}" method="GET" class="w-full space-y-6" id="profile-form">
                    <div class="flex items-center">
                        <label for="jenid" class="w-72">Jenis Identitas</label>
                        <input readonly id="jenid" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="noid" class="w-72">Nomor Identitas (NIK/PASSPORT)</label>
                        <input readonly id="noid" type="number"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="username" class="w-72">Username</label>
                        <input readonly id="username" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="email" class="w-72">Alamat Email</label>
                        <input readonly id="email" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="nama" class="w-72">Nama Lengkap</label>
                        <input readonly id="nama" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="jenkel" class="w-72">Jenis Kelamin</label>
                        <input readonly id="jenkel" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="tempatlahir" class="w-72">Tempat Lahir</label>
                        <input readonly id="tempatlahir" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="tanggallahir" class="w-72">Tanggal Lahir</label>
                        <input readonly id="tanggallahir" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="provinsi" class="w-72">Provinsi</label>
                        <input readonly id="provinsi" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="kabkota" class="w-72">Kabupaten/ Kota</label>
                        <input readonly id="kabkota" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="kecamatan" class="w-72">Kecamatan</label>
                        <input readonly id="kecamatan" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="kelurahan" class="w-72">Kelurahan</label>
                        <input readonly id="kelurahan" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="alamat" class="w-72">Alamat</label>
                        <input readonly id="alamat" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="nohp" class="w-72">No HP Aktif</label>
                        <input readonly id="nohp" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>
                    <div class="flex items-center">
                        <label for="pekerjaan" class="w-72">Pekerjaan</label>
                        <input readonly id="pekerjaan" type="text"
                            class="flex-grow text-edu-black border-abu-abu rounded">
                    </div>

                    <div class="flex gap-x-12 justify-end items-center">
                        <button id="edit"
                            class="px-12 py-[5px] rounded-3xl border border-edu-black font-semibold text-xl text-primary hover:bg-primary hover:text-white hover:border-0">
                            Edit Data
                        </button>
                        <button id="simpan" data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="px-12 py-[5px] rounded-3xl font-semibold text-xl  hover:bg-primary-light bg-primary text-white">
                            Simpan Data
                        </button>
                    </div>
                </form>
                {{-- END KONTEN --}}

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
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const formHeight = document.getElementById('content').offsetHeight; // Mendapatkan tinggi form
        const sidebar = document.getElementById('sidebar'); // Ganti 'sidebar' dengan id yang sesuai
        sidebar.style.height = formHeight + 'px';
        // PENTING DI ATAS, JANGAN DI HAPUS

        const editBtn = document.getElementById('edit')

        editBtn.addEventListener('click', (event) => {
            event.preventDefault()
            const inputs = document.querySelectorAll('input')
            inputs.forEach(input => {
                input.removeAttribute('readonly')
            })
            editBtn.style.display = 'none'
            document.getElementById('simpan').style.display = 'block'
        })

        const simpanBtn = document.getElementById('simpan')

        simpanBtn.addEventListener('click', (event) => {
            event.preventDefault()
            const inputs = document.querySelectorAll('input')
            inputs.forEach(input => {
                input.setAttribute('readonly', '')
            })
            document.getElementById('edit').style.display = 'block'

            // closemodal onclick or modal hidden send form
            const closeModal = document.getElementById('closeModal')
            // send form
            const form = document.querySelector('#profile-form')
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
