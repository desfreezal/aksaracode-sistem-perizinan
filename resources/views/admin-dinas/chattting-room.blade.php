@extends('admin-dinas.layout')

@section('content')
    <div class="min-h-[calc(100vh-150px)] mb-10">
        <div class="min-h-[calc(100vh-150px)] w-full relative flex">

            <div class="text-center w-16 flex justify-center pt-5">
                <a href="/chatting">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>

            </div>


            <div class="pt-4 pl-[26px] pr-[49px] min-h-[calc(100vh-150px)] bg-edu-bg flex-grow">

                @if (request('sesi') === 'selesai')
                    <div class="absolute bg-black opacity-20 z-40 w-full h-full">
                    </div>

                    <div class="fixed -bottom-4 z-40 p-8 text-center bg-white w-full">
                        <h1 class="font-semibold text-2xl text-primary">Sesi Chat Anda Telah Berakhir</h1>
                    </div>
                @endif

                <h1 class="font-bold text-[32px] mb-[26px]">Chat</h1>

                <div class="flex items-center w-full">
                    <img src="https://ui-avatars.com/api/?name=Anggraini Sarah&background=9D3C39&color=fff"
                        class="w-12 h-w-12 rounded-full text-white" alt="avatar">

                    <h1 class="flex-grow text-center font-semibold text-2xl text-primary">Anggraini Sarah</h1>
                </div>

                <div class=" relative">
                    {{-- CHAT BOX --}}
                    <section class="container p-4 h-[500px] pb-10 overflow-y-scroll">
                        {{-- receive --}}
                        <div class="max-w-sm">
                            <div class="flex items-center justify-start relative">
                                <div class="w-3 overflow-hidden absolute top-8 -left-3">
                                    <div class="h-4 bg-underline rotate-45 transform origin-bottom-right rounded-sm"></div>
                                </div>
                                <div class="bg-underline p-4 my-6 mb-0 rounded-lg flex-1 text-white">
                                    Nama saya anggraini saya sudah mengajukan perizinan untuk pendirian TK pada tanggal 12
                                    Oktober 2023, namun, sampai sekarang dokumen saya masih pada status Valid dan belum ada
                                    status terbaru lagi itu bagaimana ya?
                                </div>
                            </div>

                            <p class="flex justify-end">18.06</p>
                        </div>


                        {{-- send --}}
                        <div class="ml-auto max-w-sm">
                            <div class="flex items-center relative justify-end">
                                <div class="bg-primary text-white p-4 my-6 mb-0 rounded-lg flex-1">
                                    Halo anggraini, Pendirian TK anda masih tahap survey oleh kami, Silahkan ditunggu ya 😊
                                </div>
                                <div class="w-3 overflow-hidden absolute top-8 -right-3">
                                    <div class="h-4 bg-primary text-white rotate-45 transform origin-top-left rounded-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end gap-3">
                                <p class="">18.06</p>
                                <img class="w-5 h-5" src="{{ asset('pemohon/img/icons8-double-tick-50.png') }}"
                                    alt="double-tick" />
                            </div>
                        </div>
                        {{-- receive --}}
                        <div class="max-w-sm">
                            <div class="flex items-center justify-start relative">
                                <div class="w-3 overflow-hidden absolute top-8 -left-3">
                                    <div class="h-4 bg-underline rotate-45 transform origin-bottom-right rounded-sm"></div>
                                </div>
                                <div class="bg-underline p-4 my-6 mb-0 rounded-lg flex-1 text-white">
                                    Nama saya anggraini saya sudah mengajukan perizinan untuk pendirian TK pada tanggal 12
                                    Oktober 2023, namun, sampai sekarang dokumen saya masih pada status Valid dan belum ada
                                    status terbaru lagi itu bagaimana ya?
                                </div>
                            </div>

                            <p class="flex justify-end">18.06</p>
                        </div>


                        {{-- send --}}
                        <div class="ml-auto max-w-sm">
                            <div class="flex items-center relative justify-end">
                                <div class="bg-primary text-white p-4 my-6 mb-0 rounded-lg flex-1">
                                    Halo anggraini, Pendirian TK anda masih tahap survey oleh kami, Silahkan ditunggu ya 😊
                                </div>
                                <div class="w-3 overflow-hidden absolute top-8 -right-3">
                                    <div class="h-4 bg-primary text-white rotate-45 transform origin-top-left rounded-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end gap-3">
                                <p class="">18.06</p>
                                <img class="w-5 h-5" src="{{ asset('pemohon/img/icons8-double-tick-50.png') }}"
                                    alt="double-tick" />
                            </div>
                        </div>
                    </section>
                    {{-- END CHAT BOX --}}

                    {{-- SEND BUTTON --}}
                    <div class="w-full absolute bottom-0">
                        <input type="text" placeholder="ketik pesan ...."
                            class="w-full focus:border focus:border-primary rounded-lg border border-primary">

                        <button class="absolute bottom-1 right-2 rounded-full p-1 px-2 bg-primary">
                            <img class="w-6 h-6" src="{{ asset('pemohon/img/icons8-send-50.png') }}" alt="sent" />
                        </button>
                    </div>

                    {{-- END SESSION --}}
                    <div class="absolute bottom-36 right-0">
                        <button
                            class="rounded-l-full bg-primary p-4 -mr-12 text-white hover:bg-primary-light shadow-lg drop-shadow-lg font-bold"
                            id="akhiri">
                            akhiri sesi
                        </button>
                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {

            let params = new URLSearchParams(window.location.search);
            Alpine.data("select", () => ({
                open: false,
                peruntukan: "",


                toggle() {
                    this.open = !this.open;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;
                },
            }));
        });
        // INIT ALPINEJS PALING ATAS

        let params = new URLSearchParams(window.location.search);

        let akhiri = document.getElementById('akhiri');

        akhiri.addEventListener('click', function() {
            params.set('sesi', 'selesai');
            window.location.search = params;
        });
    </script>
@endpush
