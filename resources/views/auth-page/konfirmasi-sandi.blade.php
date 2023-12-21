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
                                Konfirmasi</h1>
                            <p class="flex flex-wrap justify-center text-center my-6">
                                Kata sandi anda telah berhasil diubah.<br> Silahkan masuk dengan kata sandi baru anda
                            </p>
                            <div class="flex justify-center mt-5 mb-6">
                                <button type="button"
                                    class="w-[340px] focus:outline-none text-white bg-[#9D3C39] hover:bg-[#9D3C39] focus:ring-4 focus:ring-[#9D3C39] font-bold rounded-2xl text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#9D3C39] dark:hover:bg-[#9D3C39] dark:focus:ring-[#a3413e]">
                                    Masuk
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
