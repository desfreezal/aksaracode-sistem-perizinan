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
                            <h1 class="flex justify-center text-center text-[#9D3C39] font-bold text-3xl mt-6 mb-4">Lupa Kata
                                Sandi?</h1>
                            <p class="flex flex-wrap justify-center text-center">
                                Masukkan email atau nomor handphone.<br>
                                Kami akan kirimkan kode verifikasi
                            </p>
                            <div class="mt-2">
                                <div class="can-toggle">
                                    <input id="a" type="checkbox">
                                    <label for="a">
                                        <div class="can-toggle__switch" data-checked="No.handphone" data-unchecked="Email">
                                        </div>
                                        <!-- <div class="can-toggle__label-text"></div> -->
                                    </label>
                                </div>
                            </div>
                            <form action="{{ url('/kode-verifikasi') }}" method="GET">
                                <div class="flex justify-center my-4">
                                    <input type="email" id="email"
                                        class="bg-white border border-gray-300 text-[#D9D9D9] text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-60 p-3 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="masukkan email" required>
                                </div>
                                <div class="flex justify-center mt-5 mb-10">
                                    <button type="submit"
                                        class="w-[340px] focus:outline-none text-white bg-[#9D3C39] hover:bg-[#9D3C39] focus:ring-4 focus:ring-[#9D3C39] font-bold rounded-2xl text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#9D3C39] dark:hover:bg-[#9D3C39] dark:focus:ring-[#a3413e]">Kirim
                                        Kode</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const toggle = document.getElementById('a');
        const email = document.getElementById('email');

        toggle.addEventListener('change', (e) => {
            if (e.target.checked) {
                email.placeholder = "masukkan nomor handphone";
                email.type = "number";
            } else {
                email.placeholder = "masukkan email";
                email.type = "email";
            }
        });
    </script>
@endpush
