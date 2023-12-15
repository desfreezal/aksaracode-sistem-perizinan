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
    <div class="text-edu-black">

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

        <div class="mt-16 mb-40 pt-20 pb-24 shadow-2xl rounded flex flex-col">
            <div class="flex gap-8 items-center justify-center mb-14">
                <label for="id" class="text-base">Masukkan ID Pendaftaran</label>
                <input type="text" name="idpendaftaran" class="px-5 py-1 rounded-md border-opacity-70" id="id">
            </div>

            <a href="" class="mx-auto px-7 py-3 rounded-xl bg-primary text-white font-bold text-xl hover:bg-primary-light">Cari
                Permohonan</a>
        </div>
    </div>

    <div class="absolute bottom-5 cursor-pointer right-10 p-2 rounded-full bg-primary">
        <img src="{{ asset('pemohon/img/chat.png') }}" alt="chat">
    </div>
@endsection
