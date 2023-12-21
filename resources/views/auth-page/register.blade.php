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

                        <div class="rounded-2xl pt-5 mx-7 mb-28 flex flex-col items-center border border-black" id="login-form">
                            <h1 class="font-bold text-primary text-4xl">BUAT AKUN</h1>
                            <form class="flex flex-col gap-y-5 my-5 px-10 w-full" action="/login" method="GET">
                                <input type="text" placeholder="Nama Lengkap (Sesuai Identitas)"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <input type="text" placeholder="Email" class="border border-black px-8 py-1 rounded-xl">
                                <input type="text" placeholder="Username"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <input type="text" placeholder="Nomor HP"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <input type="password" placeholder="Kata Sandi"
                                    class="border border-black px-8 py-1 rounded-xl">
                                <button type="submit"
                                    class="bg-primary py-1 rounded-3xl font-bold text-[20px] text-white">Daftar
                                    Sekarang</button>

                                <p class="text-center mt-7 mb-9 font-semibold ">
                                    <span class="text-black opacity-70">
                                        Sudah Punya Akun?
                                    </span>
                                    <a href="/login" class="text-primary">Masuk</a>
                                </p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
