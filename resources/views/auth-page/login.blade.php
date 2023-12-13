@extends('auth-page.layout')

@section('title', 'Login')

@section('content')
    <div class="w-full m-auto">
        <div class="grid grid-cols-2 min-h-screen">
            <div class="flex h-full justify-center items-center">
                <img src="{{ asset('auth/img/gambar buku.png') }}" alt="book">
            </div>
            <div class="flex h-full justify-center items-center ">
                <div class="w-[566px] border-[12px] rounded-lg bg-slate-200">

                    <div class="rounded-lg border bg-white">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('auth/img/EduLicense fix 1.png') }}" alt="">
                        </div>

                        <div class="rounded-2xl pt-5 mx-7 flex flex-col items-center border border-black" id="login-form">
                            <h1 class="font-bold text-primary text-4xl">Masuk</h1>
                            <form class="flex flex-col gap-y-5 my-5 px-3 w-full">
                                <input type="text" placeholder="Masukkan Username Anda"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <input type="password" placeholder="Kata Sandi"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <button type="submit"
                                    class="bg-primary py-1 rounded-3xl font-bold text-[20px] text-white">Masuk</button>

                                <a href="" class="text-center text-[15px] opacity-[35%]">Lupa Kata Sandi ?</a>
                            </form>
                        </div>
                        <p class="text-center mt-9 font-semibold mb-44">
                            <span class="text-black opacity-70">
                                Belum punya akun?
                            </span>
                            <a href="" class="text-primary">Daftar Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
