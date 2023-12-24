@php
    $persyaratan = [
        'Surat permohonan daftar ulang dari Ketua Yayasan/Perkumpulan/Badan Penyelenggara sesuai akta yayasan yang terakhir',
        'Akta pendirian dan perubahan badan penyelenggara satuan pendidikan berbentuk badan hukum dan memperoleh pengesahan dari Kementerian Hukum dan Hak Asasi Manusia',
        'Surat pernyataan bermaterai 10.000 yang ditandatangani oleh Ketua Yayasan/Perkumpulan/Badan Penyelenggara sesuai akta yayasan yang terakhir, yang berisi: <br> 1. pernyataan menaati peraturan perundang-undangan, <br> 2. tidak akan menerima peserta didik sebelum izin penyelenggaraan terbit, <br> 3. bertanggung jawab mutlak atas data yang disampaikan',
        'Status kepemilikan tanah belum atas nama Yayasan/Perkumpulan/Badan Penyelenggara. Dokumen kepemilikan lahan. Dokumen bukti hubungan hukum berupa sewa/pemanfaatan/penguasaan tanah yang masih berlaku sekurang-kurangnya 1 (satu) tahun. Surat pernyataan bermaterai 10.000 yang ditandatangani oleh Ketua Yayasan/Perkumpulan/Badan Penyelenggara sesuai akta yayasan yang terakhir, yang berisi: kesediaan memenuhi dokumen kepemilikan tanah atas nama Yayasan/Perkumpulan/Lembaga sesuai dengan pasal 17 Peraturan Menteri Pendidikan dan Kebudayaan RI Nomor 36 Tahun 2014 Pedoman Pendirian, Perubahan, dan Penutupan Satuan Pendidikan Dasar dan Menengah (bagi sekolah yang tanahnya belum dimiliki oleh Ketua Yayasan/Perkumpulan/Badan Penyelenggara)',
        'Kartu kepesertaan BPJS seluruh guru dan tenaga kependidikan',
        'Surat pernyataan sanggup menyediakan biaya operasional pendidikan minimal 5 (lima) tahun',
        'Jumlah peserta didik 3 (tiga) tahun terakhir',
        'Jumlah daya tampung sekolah 3 (tiga) tahun terakhir',
        'File SK izin pendirian sekolah',
        'File program tanda bukti pendirian sekolah (apabila ada)',
        'File SK izin operasional sekolah yang sebelumnya',
        'Piagam akreditasi sekolah',
        'File piagam daftar ulang yang sebelumnya',
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
                    <label for="file-{{ $key + 1 }}">
                        <div
                            class="py-3 px-6 rounded-3xl border border-black text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white">
                            Lihat File
                        </div>
                    </label>
                    <input id="file-{{ $key + 1 }}" class="hidden" type="file"
                        name="persyaratan-{{ $key + 1 }}" accept=".pdf,.jpeg,.jpg,.png">
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
