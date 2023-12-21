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

                            <h1 class="flex justify-center text-center text-[#9D3C39] font-bold text-3xl mt-6 mb-4">Kode
                                verifikasi</h1>
                            <p class="flex flex-wrap justify-center text-center">
                                Masukkan kode verifikasi anda dar email <br> atau nomor telepon anda yang kami kirimkan
                            </p>
                            <div class="my-6">
                                <form action="" method="post">
                                    <div class="flex">
                                        <div id="otp"
                                            class="flex items-center justify-center mx-auto w-full gap-4 max-w-xs">
                                            <input
                                                class="w-10 h-10 flex flex-col items-center justify-center text-center px-1 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-[#9D3C39]"
                                                type="text" name="" maxlength="1" id="first">

                                            <input
                                                class="w-10 h-10 flex flex-col items-center justify-center text-center px-1 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-[#9D3C39]"
                                                type="text" name="" maxlength="1" id="second">

                                            <input
                                                class="w-10 h-10 flex flex-col items-center justify-center text-center px-1 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-[#9D3C39]"
                                                type="text" name="" maxlength="1" id="third">

                                            <input
                                                class="w-10 h-10 flex flex-col items-center justify-center text-center px-1 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-[#9D3C39]"
                                                type="text" name="" maxlength="1" id="four">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="flex justify-center mt-5 mb-10">
                                <button type="button" onclick="collectAndSend()"
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

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            function OTPInput() {
                const inputs = document.querySelectorAll("#otp > *[id]");
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener("keydown", function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = "";
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== "") {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });

        function collectAndSend() {
            const firstValue = document.getElementById('first').value;
            const secondValue = document.getElementById('second').value;
            const thirdValue = document.getElementById('third').value;
            const fourthValue = document.getElementById('four').value;

            // Validasi jika ada input yang kosong
            if (!firstValue || !secondValue || !thirdValue || !fourthValue) {
                alert('Mohon isi semua input!');
                return;
            }

            // Gabungkan nilai dari setiap input menjadi satu variabel
            const combinedValue = `${firstValue}${secondValue}${thirdValue}${fourthValue}`;

            // Kirim nilai gabungan ke server atau lakukan sesuatu dengannya
            alert(combinedValue);
        }
    </script>
@endpush
