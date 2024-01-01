@extends('kepala-dinas.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('kepala-dinas.sidebar')

            <div class="flex-grow pl-[34px] pr-[88px] py-7 box-border min-h-screen" id="content">
                {{-- HEADER --}}
                <div class="flex items-center gap-4 mb-10">
                    <a href="{{ route('kepala-dinas-data-pengesahan', ['jenis' => $jenis, 'layanan' => $layanan]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </a>

                    <h1 class="font-bold text-[20px]">Buat Surat</h1>
                </div>

                <div
                    class="flex justify-center items-center w-full bg-primary p-1 rounded-xl border-2 border-black text-white">
                    <h1 class="font-semibold">Mohon untuk memasukkan data <br> sesuai dengan data terupdate</h1>
                </div>

                <form action="" class="space-y-7 mt-9">
                    <div class="flex items-center">
                        <label for="nomor_surat" class="w-40 pr-4">Nomor Surat</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nomor_surat"
                            id="nomor_surat">
                    </div>

                    <div class="flex items-center">
                        <label for="masa_berlaku" class="w-40 pr-4">Masa Berlaku Izin</label>
                        <input type="date" class="flex-grow rounded-xl border-2 border-primary" name="masa_berlaku"
                            id="masa_berlaku">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="ml-2 w-8 h-8 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
                    </div>

                    <div class="flex items-center">
                        <label for="alamat_sekolah" class="w-40 pr-4">Alamat Sekolah</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="alamat_sekolah"
                            id="alamat_sekolah">
                    </div>

                    <div class="flex items-center">
                        <label for="kecamatn" class="w-40 pr-4">Kecamatan</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="kecamatn"
                            id="kecamatn">
                    </div>

                    <div class="flex items-center">
                        <label for="kelurahan" class="w-40 pr-4">Kelurahan</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="kelurahan"
                            id="kelurahan">
                    </div>

                    <div class="flex items-center">
                        <label for="provinsi" class="w-40 capitalize">provinsi</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="provinsi"
                            id="provinsi">
                    </div>

                    <div class="flex items-center">
                        <label for="nama_yayasan" class="w-40 pr-4">Nama Yayasan</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nama_yayasan"
                            id="nama_yayasan">
                    </div>

                    <div class="flex items-center">
                        <label for="nama_ketua_yay" class="w-40 pr-4">Nama Ketua Yayasan</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nama_ketua_yay"
                            id="nama_ketua_yay">
                    </div>

                    <div class="flex items-center">
                        <label for="nama_kepala_skol" class="w-40 pr-4">Nama Kepala Sekolah</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nama_kepala_skol"
                            id="nama_kepala_skol">
                    </div>

                    <div class="flex items-center">
                        <label for="npsn" class="w-40 pr-4">NPSN</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="npsn"
                            id="npsn">
                    </div>

                    <div class="flex items-center">
                        <label for="nmr_sk" class="w-40 pr-4">Nomor SK Pendirian</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="nmr_sk"
                            id="nmr_sk">
                    </div>

                    <div class="flex items-center">
                        <label for="akreditasi" class="w-40 pr-4">Akreditasi</label>
                        <input type="text" class="flex-grow rounded-xl border-2 border-primary" name="akreditasi"
                            id="akreditasi">
                    </div>

                    <div class="flex items-center">
                        <label for="tgl_pengesahan" class="w-40 pr-4">Tanggal Pengesahan</label>
                        <input type="date" class="flex-grow rounded-xl border-2 border-primary" name="tgl_pengesahan"
                            id="tgl_pengesahan">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="ml-2 w-8 h-8 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>

                    </div>

                    {{-- <div class="w-full bg-edu-bg"> --}}
                    <button type="submit"
                        class="mt-16 block py-3 w-[456px] mx-auto rounded-lg border border-primary font-semibold text-lg text-primary hover:bg-primary hover:text-white">
                        Kirim
                    </button>
                    {{-- </div> --}}


                </form>


            </div>

        </div>
    </div>
@endsection
