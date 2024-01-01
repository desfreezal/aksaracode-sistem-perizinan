@php
    $persyaratan = [
        'Surat Permohonan Perpanjangan Izin Operasional dari Ketua Yayasan / Perkumpulan / Badan Penyelenggara sesuai akta yayasan yang terakhir',
        'Akta pendirian dan perubahan badan penyelenggara satuan pendidikan berbentuk badan hukum dan memperoleh pengesahan dari Kementerian Hukum dan Hak Asasi Manusia',
        'Surat Pernyataan bermaterai 10.000 yang ditandatangani oleh Ketua Yayasan / Perkumpulan / Badan Penyelenggara sesuai akta yayasan yang terakhir, yang berisi : <br>1. Pernyataan menaati peraturan perundang-undangan <br>2. Tidak akan menerima peserta didik sebelum izin penyelenggaraan terbit. <br>3. Bertanggung jawab mutlak atas data yang disampaikan',
        'Status kepemilikan tanah belum atas nama Yayasan / Perkumpulan / Badan Penyelenggara : <br>1. Dokumen kepemilikan lahan <br>2. Dokumen Bukti Hubungan Hukum berupa Sewa/Pemanfaatan/Penguasaan Tanah yang masih berlaku sekurang-kurangnya 1 (satu) tahun <br>3. Surat Pernyataan bermaterai 10.000 yang ditandatangani oleh Ketua Yayasan / Perkumpulan / Badan Penyelenggara sesuai akta yayasan yang terakhir, yang berisi : Kesediaan memenuhi dokumen kepemilikan tanah atas nama Yayasan / Perkumpulan / Lembaga sesuai dengan pasal 17 Peraturan Menteri Pendidikan dan Kebudayaan RI Nomor 36 Tahun 2014 Pedoman Pendirian, Perubahan, Dan Penutupan Satuan Pendidikan Dasar Dan Menengah (bagi sekolah yang tanahnya belum dimiliki oleh Ketua Yayasan / Perkumpulan / Badan Penyelenggara)',
        'Kartu kepesertaan BPJS seluruh guru dan tenaga pendidikan',
        'Rekening atas nama Yayasan (Minimal nominal dana investasi Rp. 60.000.000,-) print rekening minimal 3 bulan terakhir',
        'Jumlah peserta didik tiga (3) tahun terakhir',
        'Jumlah daya tampung sekolah tiga (3) tahun terakhir',
        'File SK Izin Pendirian Sekolah',
        'File Piagam Tanda Bukti Pendirian Sekolah (apabila ada)',
        'File SK Izin Operasional Sekolah yang sebelumnya',
        'Piagam Akreditasi Sekolah',
        // ...dan seterusnya
    ];

@endphp

<table class="table-fixed w-full text-sm text-left rtl:text-right text-black border border-black font-normal">
    <thead class="text-xs uppercase bg-edu-bg">
        <tr>
            <th scope="col" class="px-6 py-3 w-16">
                No
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Persyaratan
            </th>
            <th scope="col" class="px-6 py-3 w-44">

            </th>
        </tr>
    </thead>
    {{-- BODY --}}
    <tbody>
        @foreach ($persyaratan as $key => $value)
            <tr class="odd:bg-white odd:900 even:bg-gray-50 even:800">
                <td scope="row" class="px-6 py-4 ">
                    {{ $key + 1 }}
                </td>
                <td class="px-6 py-4">
                    <p>
                        {!! $value !!}
                    </p>
                    <br>
                    <p class="text-primary">Tipe file upload : pdf, jpg, jpeg, png</p>
                </td>
                <td class="px-6 py-4">
                    @if (isset($page))
                        @if ($page === 'kel-data')
                            <div class="space-y-3">
                                <label for="file-{{ $key + 1 }}">
                                    <a href="https://imgix3.ruangguru.com/assets/miscellaneous/png_jryg9i_2164.png"
                                        target="_blank">
                                        <div
                                            class="py-3 px-0 rounded-3xl border border-black text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white text-center">
                                            Lihat
                                        </div>
                                    </a>
                                </label>


                                <button type="submit" class="block mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-8 h-8 text-[#27C119]">
                                        <path fill-rule="evenodd"
                                            d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </button>


                                <button class="block mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-8 h-8 text-[#EE0F0F]">
                                        <path fill-rule="evenodd"
                                            d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </button>

                            </div>
                        @endif
                    @else
                        <label for="file-{{ $key + 1 }}">
                            <div
                                class="py-3 px-6 rounded-3xl border border-black text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white">
                                Lihat File
                            </div>
                        </label>
                        <input id="file-{{ $key + 1 }}" class="hidden" type="file"
                            name="persyaratan-{{ $key + 1 }}" accept=".pdf,.jpeg,.jpg,.png">
                    @endif
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
