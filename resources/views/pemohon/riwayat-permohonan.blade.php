@extends('pemohon.layout')

@section('notif-container')
    <button class="p-5 flex justify-end w-full" id="closeNotif">X</button>
    <div class="overflow-y-auto mx-5">

        <div class="flex gap-x-4 items-center px-4 py-4 bg-primary rounded-xl mb-3 text-white">
            <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                <img src="{{ asset('pemohon/img/document.png') }}" alt="" class="aspect-square w-8 h-8">
            </div>

            <div>
                <p>Telah sukses membuat permohonan</p>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-white">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                            clip-rule="evenodd" />
                    </svg>

                    <p>Just now</p>
                </div>
            </div>
        </div>

        <div class="flex gap-x-4 items-center px-4 py-4 bg-primary rounded-xl mb-3 text-white">
            <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                <img src="{{ asset('pemohon/img/documents check.png') }}" alt="" class="aspect-square w-8 h-8">
            </div>

            <div>
                <p>Berkas sedang di verifikasi</p>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-white">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                            clip-rule="evenodd" />
                    </svg>

                    <p>Just now</p>
                </div>
            </div>
        </div>

        <div class="flex gap-x-4 items-center px-4 py-4 bg-primary rounded-xl mb-3 text-white">
            <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                <img src="{{ asset('pemohon/img/survey.png') }}" alt="" class="aspect-square w-8 h-8">
            </div>

            <div>
                <p>Permohonan sedang di survey</p>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-white">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                            clip-rule="evenodd" />
                    </svg>

                    <p>Just now</p>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('pemohon.sidebar')
            {{-- SIDEBAR --}}

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">
                {{-- START CONTENT --}}
                <div class="py-3 pl-11 bg-primary rounded-md mb-9">
                    <h1 class="text-white font-medium text-3xl">Permohonan Saya</h1>
                </div>

                {{-- TABLE --}}
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemohon</th>
                            <th>No Daftar</th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Perizinan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Oksana Khoirunnida</td>
                            <td>123456</td>
                            <td>08/11/2023 - 16:59:10</td>
                            <td>Daftar Ulang Izin Operasional Satuan Pendidikan SD</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>123456789</td>
                            <td>12-12-2021</td>
                            <td>TES</td>
                        </tr>
                    </tbody>
                </table>


                {{-- END OF CONTENT --}}

            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        new DataTable('#example', {
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json',
            },
        });
        const formHeight = document.getElementById('content').offsetHeight;
        // Mendapatkan tinggi form
        const sidebar = document.getElementById('sidebar');
        // Ganti 'sidebar' dengan id yang sesuai
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
