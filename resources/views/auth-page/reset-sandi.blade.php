@extends('auth-page.layout')

@section('title', 'Register')

@section('content')
    <div class="w-full m-auto">
        <div class="min-h-screen flex justify-center items-center">
            <div>
                <div class="w-[566px] border-[12px] rounded-lg bg-slate-200">
                    <div class="rounded-lg border bg-white">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('auth/img/EduLicense fix 1.png') }}" alt="">
                        </div>

                        <div class="rounded-2xl pt-5 mx-7 mb-28 flex flex-col items-center border border-black"
                            id="login-form">

                            <h1 class="flex justify-center text-center text-[#9D3C39] font-bold text-3xl mt-6 mb-4">
                                Reset Kata Sandi</h1>
                            <p class="flex flex-wrap justify-center text-center">
                                Masukkan kata sandi baru anda dan konfirmasikan <br> kata sandi baru untuk mengatur ulang
                                kata
                                sandi
                            </p>
                            <!-- <div class="w-full md:w-2/3 shadow px-5 py-4 bg-white mx-auto"> -->
                            <div class="relative mb-5 mt-7" x-data="{ isVisible: false }">
                                <div class="absolute flex right-10 mx-auto items-center ml-2 h-full">
                                    <button class="px-1 block focus:outline-none"
                                        @click="$dispatch('visibility'); isVisible = !isVisible;">
                                        <div x-show="isVisible">
                                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div x-show="!isVisible">
                                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <span
                                    class="block font-medium ml-12 text-gray-700 after:content-['*'] after:ml-0.5 after:text-red-500">Kata
                                    Sandi Baru</span>
                                <label for="password1" class="flex flex-wrap justify-center">
                                    <input type="password" id="password1" placeholder="Kata Sandi Baru" minlength="5"
                                        class="px-3 py-3 w-[400px] border-b-2 border-r-0 border-l-0 border-t-0 focus:border-transparent border border-gray-400 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-100 first-letter:invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 invalid:focus:bg-pink-100 peer"
                                        @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                    <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible">less than 5
                                        characters</p>
                                </label>
                            </div>
                            <div class="relative mb-5 mt" x-data="{ isVisible: false }">
                                <div class="absolute flex right-10 mx-auto items-center ml-2 h-full">
                                    <button class="px-1 block focus:outline-none"
                                        @click="$dispatch('visibility'); isVisible = !isVisible;">
                                        <div x-show="isVisible">
                                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div x-show="!isVisible">
                                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <span
                                    class="block font-medium ml-12 text-gray-700 after:content-['*'] after:ml-0.5 after:text-red-500">Konformasi
                                    Kata Sandi Baru</span>
                                <label for="password1" class="flex flex-wrap justify-center ">
                                    <input type="password" id="password1" placeholder="Konformasi Kata Sandi Baru"
                                        minlength="5"
                                        class="px-3 py-3 w-[400px] border-b-2 border-r-0 border-l-0 border-t-0 focus:border-transparent border border-gray-400 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-100 first-letter:invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 invalid:focus:bg-pink-100 peer"
                                        @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                    <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible">less than 5
                                        characters</p>
                                </label>
                            </div>
                            {{-- <!-- </div> --> --}}
                            <div class="flex justify-center mt-2 mb-6">
                                <button type="button"
                                    class="w-[340px] focus:outline-none text-white bg-[#9D3C39] hover:bg-[#9D3C39] focus:ring-4 focus:ring-[#9D3C39] font-bold rounded-2xl text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#9D3C39] dark:hover:bg-[#9D3C39] dark:focus:ring-[#a3413e]">
                                    Verifikasi
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
