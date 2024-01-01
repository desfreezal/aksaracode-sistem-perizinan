@extends('verifikator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('verifikator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="space-y-9 mb-16">
                    <h1 class="font-bold text-3xl">Survey</h1>
                </div>

                <div
                    class="flex justify-center items-center w-full bg-primary p-1 rounded-xl border-2 border-black text-white">
                    <h1 class="font-semibold">Mohon untuk memasukkan data <br> sesuai dengan data terupdate</h1>
                </div>

                <form action="" class="space-y-7 mt-9">
                    <div class="flex items-center">
                        <label for="nama_nara" class="w-40 pr-4">Nama Narasumber</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nama_nara"
                            id="nama_nara">
                    </div>

                    <div class="flex items-center">
                        <label for="waktu_pel" class="w-40 pr-4">Waktu Pelaksanaan</label>
                        <input type="date" class="flex-grow rounded-xl border-2 border-primary" name="waktu_pel"
                            id="waktu_pel">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="ml-2 w-8 h-8 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
                    </div>

                    <div class="flex items-center">
                        <label for="dok_hasil_wawan" class="w-40 pr-4">Dokumen Hasil Wawancara</label>
                        {{-- <label for="dok_hasil_wawan" class="flex-grow rounded-xl border-2 border-primary py-5"></label> --}}
                        <input type="file" class="flex-grow rounded-xl border-2 border-primary" name="dok_hasil_wawan"
                            id="dok_hasil_wawan">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="ml-2 w-8 h-8 text-primary">
                            <path fill-rule="evenodd"
                                d="M11.47 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1-1.06 1.06l-3.22-3.22V16.5a.75.75 0 0 1-1.5 0V4.81L8.03 8.03a.75.75 0 0 1-1.06-1.06l4.5-4.5ZM3 15.75a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center">
                        <label for="hasil_foto" class="w-40 pr-4">Hasil Foto</label>
                        <input type="file" class="flex-grow rounded-xl border-2 border-primary" name="hasil_foto"
                            id="hasil_foto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="ml-2 w-8 h-8 text-primary">
                            <path fill-rule="evenodd"
                                d="M11.47 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1-1.06 1.06l-3.22-3.22V16.5a.75.75 0 0 1-1.5 0V4.81L8.03 8.03a.75.75 0 0 1-1.06-1.06l4.5-4.5ZM3 15.75a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="w-[437px] mx-auto pt-24"> 
                        <button class="w-full border border-primary py-3 hover:bg-primary hover:text-white text-primary rounded-lg">
                            Kirim
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
