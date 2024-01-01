@extends('kepala-dinas.layout')

@section('content')
    <div class=" h-full min-h-[calc(100vh-100px)] mb-10">
        <div class="min-h-[calc(100vh-100px)] pt-4 pl-[102px] pr-[49px] space-y-[82px]">
            <h1 class="font-bold text-[32px]">Chat</h1>

            <div class="flex items-center w-full">
                <div class="w-32">
                    <p>Pilihan Chatting</p>
                </div>

                <div x-data="select" class="flex-grow" @click.outside="open = false">
                    <button type="button" @click="toggle" :class="(open) && 'ring-blue-600'"
                        class="flex w-full items-center justify-between rounded bg-white p-2 ring-4 ring-primary">
                        <span x-text="peruntukan || 'Pilih Peruntukan'"></span>
                        <i class="fas fa-chevron-down text-xl"></i>
                    </button>

                    <ul class="z-50 absolute mt-1 w-full rounded bg-gray-50 ring-1 ring-gray-300" x-show="open">
                        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('Pemohon')">
                            Pemohon</li>
                        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('Operator')">
                            Operator</li>
                        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('Verifikator')">
                            Verifikator</li>
                        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setPeruntukan('Kepala Dinas')">
                            Kepala Dinas</li>
                    </ul>
                </div>
            </div>

            <div class="relative w-full">
                <input type="text" placeholder="Cari" class="w-full rounded-[18px] border-none drop-shadow-lg pl-[60px]">

                <div class="absolute top-0 left-0 mt-2 ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 absolute">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div id="bubble-chat-container" class="w-full">

                <a href="{{route('kepala-dinas-detail-chatting', ['id_user' => 1])}}">
                    <div class="py-[18px] flex justify-between border-b border-b-primary">
                        <div class="flex items-center gap-x-5">
                            <img src="https://ui-avatars.com/api/?name=Athalia Putri&background=9D3C39&color=fff"
                                class="w-8 h-8 rounded-full text-white" alt="avatar">

                            <div class="block">
                                <p class="text-[#45484F] font-semibold text-xl">Athalia Putri</p>
                                <p class="text-[#A2A3A7]">Halo, Saya mau Bertanya</p>
                            </div>
                        </div>

                        <div class="block text-end">
                            <p class="text-[#A2A3A7]">Hari ini</p>
                            <div class="rounded-full inline-block px-3 py-1 bg-primary text-white">
                                1
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('kepala-dinas-detail-chatting', ['id_user' => 2])}}">
                    <div class="py-[18px] flex justify-between border-b border-b-primary">
                        <div class="flex items-center gap-x-5">
                            <img src="https://ui-avatars.com/api/?name=Raki Devan&background=9D3C39&color=fff"
                                class="w-8 h-8 rounded-full text-white" alt="avatar">

                            <div class="block">
                                <p class="text-[#45484F] font-semibold text-xl">Raki Devan</p>
                                <p class="text-[#A2A3A7]">Terimakasih Kak</p>
                            </div>
                        </div>

                        <div class="block text-end">
                            <p class="text-[#A2A3A7]">17/6/2023</p>
                            <div class="rounded-full px-3 py-1 bg-primary text-white hidden">
                                1
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('kepala-dinas-detail-chatting', ['id_user' => 3])}}">
                    <div class="py-[18px] flex justify-between border-b border-b-primary">
                        <div class="flex items-center gap-x-5">
                            <img src="https://ui-avatars.com/api/?name=Hana Fudlola&background=9D3C39&color=fff"
                                class="w-8 h-8 rounded-full text-white" alt="avatar">

                            <div class="block">
                                <p class="text-[#45484F] font-semibold text-xl">Hana Fudlola</p>
                                <p class="text-[#A2A3A7]">Baik Terimakasih, Kak!</p>
                            </div>
                        </div>

                        <div class="block text-end">
                            <p class="text-[#A2A3A7]">17/6/2023</p>
                            <div class="rounded-full px-3 py-1 bg-primary text-white hidden">
                                1
                            </div>
                        </div>
                    </div>
                </a>
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
    </script>
@endpush
