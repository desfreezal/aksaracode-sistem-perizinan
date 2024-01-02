@extends('pemohon.layout')

@section('content')
    <div class="text-edu-black my-8 mx-[50px]">

        <div class="py-3 pl-11 bg-primary rounded-md">
            <h1 class="text-white font-medium text-3xl">Lacak Permohonan Saya</h1>
        </div>

        <div class="flex items-center gap-12 mx-4 mt-5">
            <img src="{{ asset('pemohon/img/Loupe.png') }}" alt="">
            <div class="w-[1051px]">
                <p class="font-medium text-xl py-[10px]">Pemohon dapat melakukan pengecekan status terkini terkait
                    permohonan
                    dengan cara memasukkan ID Pendaftaran yang diberikan oleh sistem pada saat awal permohonan Izin</p>
            </div>
        </div>

        <form action="{{ url('/dashboard-pemohon/status-permohonan/{id}') }}" method="GET" id="form-submit">
            <div class="mt-16 mb-40 pt-20 pb-24 shadow-2xl rounded flex flex-col">

                <div class="flex gap-8 items-center justify-center mb-14">
                    <label for="id" class="text-base">Masukkan ID Pendaftaran</label>
                    <input type="text" class="px-5 py-1 rounded-md border-opacity-70" id="id">
                </div>

                <button type="button" onclick="submitForm()"
                    class="mx-auto px-7 py-3 rounded-xl bg-primary text-white font-bold text-xl hover:bg-primary-light"
                    id="submitbtn">Cari
                    Permohonan</button>
            </div>
        </form>
    </div>

    <div class="fixed w-12 h-12 bottom-28 rounded-full right-10 bg-primary">
        <a href="/chatting">
            <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
        </a>
    </div>
@endsection

@push('scripts')
    <script>
        function submitForm() {
            // event.preventDefault(); // Mencegah default behavior dari tombol submit
            let idPendaftaran = document.getElementById('idpendaftaran').value; // Mendapatkan nilai dari input field
            window.location.href = '/dashboard-pemohon/status-permohonan/' + idPendaftaran; // Melakukan redirect
        }

        const submitbtn = document.getElementById('submitbtn');
        const id = document.getElementById('id');

        submitbtn.addEventListener('click', () => {
            if (id.value == '') {
                alert('ID Pendaftaran tidak boleh kosong');
            } else {
                window.location.href = '/dashboard-pemohon/status-permohonan/' +
                    id.value; // Melakukan redirect

            }
        });
    </script>
@endpush
