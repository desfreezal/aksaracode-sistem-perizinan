@php
    $persyaratan = [
        'Berita Acara Keterlambatan Perpanjangan Izin Operasional (Bagi yang melewati masa berlaku)- Surat pernyataan kegiatan belajar mengajar masih berjalan dan aktif (Bagi yang mengajukan pas pada tanggal berakhirnya masa berlaku)',
        'Struktur Organisasi Lembaga',
        'Akta notaris dan /atau surat penetapan badan hukum dalam bentuk yayasan, perkumpulan, atau badan lain sejenis dari kementerian bidang hukum atas nama pendiri atau induk organisasi pendiri disertai surat keputusan yang menunjukkan adanya hubungan dengan organisasi induk',
        'Surat Pernyataan Keabsahan Data/Dokumen yang di upload (bermaterai 10000)',
        'Data anak didik/peserta didik dengan jumlah peserta didik minimal 1 (satu) Kelompok 15 (Lima Belas) anak',
        'Fotokopi rekening a.n lembaga',
        'Surat Permohonan Izin Perpanjangan operasional dari Ketua Yayasan / Perkumpulan / Badan Penyelenggara',
        'SK Izin Operasional asli',
        'Rencana Jadwal Pembelajaran',
        'Data Pendidik/Guru sesuai dengan standar kompetensi dilampiri fotocopy ijazah terakhir, sertifikat pendukung dan KTP',
        'Surat Pernyataan tidak keberatan atas pendirian dan penyelenggaraan Sekolah diketahui oleh Tetangga terdekat, Ketua RT, Ketua RW, Lurah dan Camat setempat',
        'Surat pernyataan terkait Lembaga tidak sedang dalam konflik/sengketa (ditandatangani ketua yayasan dan Kepala Lembaga bermaterai 10000)',
        'Fotokopi status Akreditasi Lembaga',
        'Pas foto ketua yayasan terbaru (Foto formal, background warna merah, ukuran 3x4)',
        'SK Izin Pendirian asli',
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
        </tr>
    </thead>
    <tbody>
        @foreach ($persyaratan as $key => $item)
            <tr class="odd:bg-white odd:900 even:bg-gray-50 even:800">
                <td scope="row" class="px-6 py-4 ">
                    {{ $key + 1 }}
                </td>
                <td class="px-6 py-4">
                    <p>{!! $item !!}</p>
                    <br>
                    <p class="text-primary">Tipe file upload : pdf, jpg, jpeg, png</p>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
