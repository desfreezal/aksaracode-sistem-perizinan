@extends('pemohon.layout')

@section('content')
    <div class=" h-full min-h-[calc(100vh-200px)]">

        <div class="flex min-h-[calc(100vh-200px)]">
            {{-- SIDEBAR --}}
            <div class="w-80 py-2 border-edu-black border-r-2" id="sidebar">
                <div class="py-[10px] border-b-2 border-edu-black">
                    <h1 class="pl-[50px] font-semibold text-[32px]">Pesan</h1>
                </div>

                <div class="mt-3 space-y-3">
                    {{-- PILIH BUBBLE CHAT --}}
                    <a href="/dashboard-pemohon/chatting/1">
                        <div
                            class="pl-12 mb-4 pr-3 flex items-center gap-x-4 {{ request()->route()->parameter('id_user') == 1? 'bg-abu-abu shadow': '' }} hover:bg-abu-abu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-20 h-20">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="space-y-1">
                                <h1 class="font-semibold text-xl">Operator</h1>
                                <p class="">Permohonan anda sedang diproses</p>
                            </div>
                        </div>

                    </a>
                    <a href="/dashboard-pemohon/chatting/2">
                        <div
                            class="pl-12 mb-4 pr-3 flex items-center gap-x-4 {{ request()->route()->parameter('id_user') == 2? 'bg-abu-abu shadow': '' }} hover:bg-abu-abu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-20 h-20">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="space-y-1">
                                <h1 class="font-semibold text-xl">Verifikator</h1>
                                <p class="">Permohonan anda sedang diproses</p>
                            </div>
                        </div>

                    </a>
                    <a href="/dashboard-pemohon/chatting/3">
                        <div
                            class="pl-12 mb-4 pr-3 flex items-center gap-x-4 {{ request()->route()->parameter('id_user') == 3? 'bg-abu-abu shadow': '' }} hover:bg-abu-abu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-20 h-20">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="space-y-1">
                                <h1 class="font-semibold text-xl">Admin Dinas</h1>
                                <p class="">Permohonan anda sedang diproses</p>
                            </div>
                        </div>

                    </a>

                </div>
            </div>
            {{-- END OF SIDEBAR --}}

            <div class="flex-grow h-full pt-7 box-border" id="content">
                {{-- CONTENT --}}

                @if (request()->route()->parameter('id_user'))
                    <div class="h-[calc(100vh-200px)] overflow-scroll flex flex-col justify-end">

                        {{-- SEND PANEL --}}
                        <div class=" bg-abu-abu-second bottom-1 fixed w-[calc(100%-400px)] rounded ">
                            <div class="px-2 flex items-center gap-x-5">
                                <button>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>

                                <input type="text" class="flex-grow rounded-3xl my-1">

                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                        {{-- END SEND PANEL --}}

                        {{-- RIWAYAT CHAT AMBIL DARI DATABASE --}}
                        <div class="pl-[34px] pr-[88px] overflow-y-scroll space-y-5">
                            {{-- receive --}}
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-10 h-10">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>

                                <div id="isi-pesan" class="max-w-[calc(100vw-500px)] bg-edu-bg p-2 rounded">
                                    Dear [Nama Pemohon],
                                    <br>
                                    Halo! Kami berterima kasih atas pengajuan permohonan Anda untuk [jenis permohonan] di
                                    EduLicense. Kami ingin memberitahu Anda bahwa tim admin sedang aktif memproses
                                    permohonan Anda dengan seksama.
                                    <br><br>

                                    Mohon bersabar, karena kami berkomitmen untuk menyelesaikan verifikasi ini dengan cermat
                                    agar proses pendaftaran Anda berjalan lancar. Kami menyadari betapa pentingnya langkah
                                    ini dalam mewujudkan visi pendidikan Anda.
                                    <br><br>

                                    Jika diperlukan informasi tambahan atau ada pertanyaan lebih lanjut, jangan ragu untuk
                                    menghubungi tim dukungan kami. Kami siap membantu Anda.
                                    <br><br>

                                    Harap perhatikan juga kotak masuk email Anda secara berkala, karena kami akan memberikan
                                    pembaruan dan informasi lebih lanjut melalui email.
                                    <br><br>

                                    Terima kasih atas kesabaran dan kerjasamanya. Kami sangat menghargai antusiasme Anda
                                    dalam menjalani proses ini. Semoga segera bisa memberikan kabar baik kepada Anda.
                                    <br><br>

                                    Terima kasih, Tim EduLicense
                                </div>
                            </div>

                            {{-- sending --}}
                            <div class="flex justify-start items-start flex-row-reverse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-10 h-10">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>

                                <div id="isi-pesan" class="max-w-[calc(100vw-500px)] bg-edu-bg p-2 rounded">
                                    Baik, terima kasih atas pesannya!
                                </div>
                            </div>

                        </div>
                        {{-- END OF RIWAYAT CHAT --}}

                    </div>
                @else
                    <div class="flex h-full justify-center items-center font-bold text-3xl">
                        SILAKAN PILIH CHAT TERLEBIH DAHULU
                    </div>
                @endif

                {{-- END OF CONTENT --}}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script></script>
@endpush
