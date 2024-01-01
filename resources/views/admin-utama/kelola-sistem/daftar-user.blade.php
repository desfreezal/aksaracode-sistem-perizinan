@extends('admin-utama.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-utama.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                <h1 class="mb-9 font-semibold text-xl">Daftar Akun Pengguna</h1>

                <div class="space-y-8">

                    <div class="flex items-center gap-7 text-primary">
                        <div class="border border-primary rounded-lg flex-grow py-1 text-center">Nama Pengguna</div>
                        <div class="border border-primary rounded-lg w-16 py-1 text-center">Aksi</div>
                    </div>
                    {{-- DATA --}}
                    <div class="flex items-center gap-7 ">
                        <div class=" flex-grow py-1 text-center">Jane Cooper</div>
                        <div class=" w-16 py-1 flex justify-end text-primary">
                            <a href="{{ route('admin-utama-edit-user', ['id'=>1]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="flex items-center gap-7 ">
                        <div class=" flex-grow py-1 text-center">Cameron Williamson</div>
                        <div class=" w-16 py-1 flex justify-end text-primary">
                            <a href="{{ route('admin-utama-edit-user', ['id'=>1]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="flex items-center gap-7 ">
                        <div class=" flex-grow py-1 text-center">Robert Fox</div>
                        <div class=" w-16 py-1 flex justify-end text-primary">
                            <a href="{{ route('admin-utama-edit-user', ['id'=>1]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
