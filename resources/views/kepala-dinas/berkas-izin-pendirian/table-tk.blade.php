@php
    $persyaratan = [
        'Rencana Anggaran Biaya Operasional per-bulan dalam 1 (satu) tahun (RAPBTK)',
        'Fotokopi rekening a.n Yayasan',
        'Akta notaris dan /atau surat penetapan badan hukum dalam bentuk yayasan, perkumpulan, atau badan lain sejenis dari kementerian bidang hukum atas nama pendiri atau induk organisasi pendiri disertai surat keputusan yang menunjukkan adanya hubungan dengan organisasi induk',
        'Surat Permohonan Izin Pendirian dan Operasional Lembaga Oleh Ketua Yayasan / Perkumpulan / Badan Penyelenggara',
        'Data Pendidik/Guru sesuai dengan standar kompetensi dilampiri fotocopy ijazah terakhir, sertifikat pendukung dan KTP',
        'Denah ruang dan peta lokasi',
        'SK Pengangkatan Kepala TK dan Guru/Pendidik',
        'Radius/jarak antara lembaga TK minimal 1,5 Km',
        'Izin Mendirikan Bangunan (IMB) Sesuai dengan Peraturan Walikota No. 47 tahun 2013 tentang Penyelenggaraan dan Pengelolaan Pendidikan di kota Surabaya dan Peraturan Walikota No. 4 tahun 2016 tentang Peta Rincian Rencana Tata Ruang kota Surabaya',
        'KTP ketua yayasan',
        'Surat Pernyataan tidak keberatan atas pendirian dan penyelenggaraan Sekolah diketahui oleh Tetangga terdekat, Ketua RT, Ketua RW, Lurah dan Camat setempat',
        'Pas foto ketua yayasan terbaru ukuran 3 x 4',
        'Rencana jadwal kegiatan/ pembelajaran',
        'Surat Pernyataan bermaterai 10000, dengan substansi: <br> Keaslian dan keabsahan berkas yang diupload',
        'Surat pernyataan terkait Lembaga tidak sedang dalam konflik/sengketa (ditandatangani ketua yayasan dan Kepala Lembaga bermaterai 10000)',
        'Data sarana dan prasarana TK (Dilampiri foto setiap sarana dan prasarananya) meliputi : <br>1. Memiliki luas lahan minimal 300 m2 (untuk bangunan dan halaman);<br>2. Memiliki ruang kegiatan anak yang aman dan sehat dengan rasio minimal 3 m2 per-anak dan tersedia fasilitas cuci tangan dengan air bersih;<br> 3. Memiliki ruang guru;<br>4. Memiliki ruang kepala; <br>5. Memiliki ruang tempat UKS (Usaha Kesehatan Sekolah) dengan kelengkapan P3K (Pertolongan Pertama Pada Kecelakaan);<br>6. Memiliki jamban dengan air bersih yang mudah dijangkau oleh anak dengan pengawasan guru;<br>7. Memiliki ruang lainnya yang relevan dengan kebutuhan kegiatan anak; <br>8. Memiliki alat permainan edukatif yang aman dan sehat bagi anak yang sesuai dengan SNI (Standar Nasional Indonesia);<br> 9. Memiliki fasilitas bermain di dalam maupun di luar ruangan yang aman dan sehat dan <br>10. Memiliki tempat sampah yang tertutup dan tidak tercemar, dikelola setiap hari',
        'Dokumen tentang status tanah/gedung (Hak Milik/sewa/pinjam/kontrak minimal 5 tahun) dan / atau surat keterangan penggunaan Fasilitas Umum diketahui oleh Pengurus yang digunakan tempatnya dan Ketua Yayasan',
        'Struktur Organisasi Lembaga',
        'BPJS Ketenagaakerjaan bagi pendidik dan tenaga kependidikan (SE Mendikbud Ristek No. 8 Tahun 2021)',
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
