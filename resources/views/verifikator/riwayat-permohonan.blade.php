@extends('verifikator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('verifikator.sidebar-profile')
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
