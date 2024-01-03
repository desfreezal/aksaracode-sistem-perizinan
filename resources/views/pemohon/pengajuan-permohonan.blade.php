@extends('pemohon.layout')

@section('notif-container')
    <button class="float-right m-5" id="closeNotif">X</button>
    <div class="w-60 text-center flex justify-center items-center flex-col m-16">
        <img src="{{ asset('pemohon/img/Illustration.png') }}" class="aspect-square object-fill w-40 mb-7" alt="">
        <p>Kami akan memberi tahu Anda setelah kami melakukan
            sesuatu untukmu</p>
    </div>
@endsection

@section('content')
    <div class="mx-36 mt-5 min-h-screen">
        <div class="mb-9">
            {!! Breadcrumbs::render('pemohon-dashboard') !!}
        </div>

        <div id="card-container" class="flex items-center gap-x-6">

            <div class="w-[234px] min-h-[267px] pt-4 bg-primary rounded-[36px] box-border">
                <a href="{{ route('pemohon-daftar-ulang') }}">
                    <div class="mx-11 px-6 py-5 rounded-full bg-edu-bg">
                        <img src="{{ asset('home/img/Folder.png') }}" alt="folder" class="mx-auto w-full">
                    </div>

                    <h1 class="ml-4 mr-5 mt-3 mb-8 text-white font-bold text-lg text-center">Daftar Ulang Izin Operasional
                        Satuan Pendidikan</h1>
                </a>
            </div>

            <div class="w-[234px] min-h-[267px] pt-4 bg-primary rounded-[36px] box-border">
                <a href="{{ route('izin-pendirian') }}">
                    <div class="mx-11 px-6 py-5 rounded-full bg-edu-bg">
                        <img src="{{ asset('home/img/School.png') }}" alt="folder" class="mx-auto w-full">
                    </div>

                    <h1 class="ml-4 mr-5 mt-3 mb-8 text-white font-bold text-lg text-center">Izin Pendirian Satuan
                        Pendidikan
                    </h1>
                </a>
            </div>
            <div class="w-[234px] min-h-[267px] pt-4 bg-primary rounded-[36px] box-border">
                <a href="{{ route('pemohon-izin-operasional') }}">
                    <div class="mx-11 px-6 py-5 rounded-full bg-edu-bg">
                        <img src="{{ asset('home/img/Compliant.png') }}" alt="folder" class="mx-auto w-full">
                    </div>

                    <h1 class="ml-4 mr-5 mt-3 mb-8 text-white font-bold text-lg text-center">Izin Operasional Satuan
                        Pendidikan
                    </h1>
                </a>
            </div>
            <div class="w-[234px] min-h-[270px] pt-4 bg-primary rounded-[36px] box-border">
                <a href="{{ route('pemohon-pembaruan-data') }}">
                    <div class="mx-11 px-6 py-5 rounded-full bg-edu-bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-primary mx-auto">
                            <path fill-rule="evenodd"
                                d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>

                    <h1 class="ml-4 mr-5 mt-3 mb-8 text-white font-bold text-lg text-center">Pembaruan Data
                    </h1>
                </a>
            </div>
        </div>
    </div>

    <div class="fixed w-12 h-12 bottom-28 rounded-full left-8 bg-primary">
        <a href="/chatting">
            <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
        </a>
    </div>
    {{-- <div class="container-kotak-cokelat" style="gap: 10px; margin: 80px 50px">
        <div class="kotak-cokelat">
            <div class="daftar-ulang">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Folder.png') }}" alt="LogoDaftarUlang" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-daftar-ulang') }}">Daftar Ulang Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-1">
            <div class="izin-pendirian">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/School.png') }}" alt="LogoIzinPendirian" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-izin-pendirian') }}">Izin Pendirian Satuan Pendidikan</a>
                </div>
            </div>
        </div>
        <div class="kotak-cokelat-2">
            <div class="izin-operasional">
                <div class="gambar-bulat">
                    <img src="{{ asset('home/img/Compliant.png') }}" alt="LogoIzinOperasional" />
                </div>
                <div class="tombol-putih">
                    <a href="{{ route('pemohon-izin-operasional') }}">Izin Operasional Satuan Pendidikan</a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
