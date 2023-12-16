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
    <div class="text-edu-black my-8 mx-[50px]">

        <div class="py-3 pl-11 mb-5 bg-primary rounded-md">
            <h1 class="text-white font-medium text-3xl">Status Permohonan Saya</h1>
        </div>

        <form action="" class="space-y-3 mb-8">
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Sub Perizinan</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Tanggal Pendaftaran</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">NIK Pemohon</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">Nama Pemohon</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">No. Handphone Pemohon</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
            <div class="flex items-center w-[1008px]">
                <label for="" class="pl-4 w-80">ID Pendaftaran</label>
                <input type="text" class="flex-grow border border-abu-abu rounded">
            </div>
        </form>


        <div class="flex justify-center mb-12">
            <h1 class="font-semibold text-2xl">Alur Perizinan</h1>
        </div>

        <div class="flex justify-center mx-auto items-center p-4 w-3/4 mb-52">
            <div class="flex flex-col items-center relative">
                {{-- CHECKBOX --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary w-6 h-6">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Validasi Data</h1>
                    <p class="font-thin text-sm">Sudah Selesai</p>
                </div>
            </div>
            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary "></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>
            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>
                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Melakukan Survei</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>

            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50"></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>


            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Verifikasi data setelah survei</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>

            {{-- GARIS --}}
            <div class="relative flex-auto flex">
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50"></div>
                <div class="flex-grow h-0.5 bg-primary bg-opacity-50 ">
                </div>
            </div>
            {{-- BULAT --}}
            <div class="flex flex-col items-center relative">
                <div class="w-6 h-6 border-2 border-primary border-opacity-50 rounded-full"></div>

                <div class="absolute w-64 text-center top-10">
                    <h1 class="font-semibold text-lg">Permohonan disetujui</h1>
                    <p class="font-thin text-sm">Belum Selesai</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-14 cursor-pointer right-10 p-2 rounded-full bg-primary">
        <img src="{{ asset('pemohon/img/chat.png') }}" alt="chat">
    </div>
@endsection
