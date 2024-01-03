@php
    $persyaratan = [
        [
            'text' => 'Surat Permohonan Izin Perpanjangan operasional dari Ketua Yayasan / Perkumpulan / Badan Penyelenggara',
            'name' => 'Super_Daftar_Ulang',
        ],
        [
            'text' => 'SK Izin Pendirian asli',
            'name' => 'SK_Izin_Pendirian',
        ],
        [
            'text' => 'Struktur Organisasi Lembaga',
            'name' => ''
        ],
        [
            'text' => 'SK Izin Operasional asli',
            'name' => 'SK_Izin_Operasional',
        ],
        [
            'text' => 'Akta notaris dan /atau surat penetapan badan hukum dalam bentuk yayasan, perkumpulan, atau badan lain sejenis dari kementerian bidang hukum atas nama pendiri atau induk organisasi pendiri disertai surat keputusan yang menunjukkan adanya hubungan dengan organisasi induk',
            'name' => 'Akta_Notaris',
        ],
        [
            'text' => 'Data Pendidik/Guru sesuai dengan standar kompetensi dilampiri fotocopy ijazah terakhir, sertifikat pendukung dan KTP',
            'name' => 'Data_Pendidik',
        ],
        [
            'text' => 'Data anak didik/peserta didik dengan jumlah peserta didik minimal 1 (satu) Kelompok 15 (Lima Belas) anak',
            'name' => 'Data_Anak_Dididk',
        ],
        [
            'text' => 'Rencana Jadwal Pembelajaran',
            'name' => 'Rencana_Jadwal',
        ],
        [
            'text' => 'Dokumen tentang status tanah/gedung (Hak Milik/sewa/pinjam/kontrak minimal 5 tahun) dan / atau surat keterangan penggunaan Fasilitas Umum diketahui oleh Pengurus yang digunakan tempatnya dan Ketua Yayasan',
            'name' => 'Doc_Milik_Lahan',
        ],
        [
            'text' => 'Surat Pernyataan tidak keberatan atas pendirian dan penyelenggaraan Sekolah diketahui oleh Tetangga terdekat, Ketua RT, Ketua RW, Lurah dan Camat setempat',
            'name' => 'Super_Bermaterai',
        ],
        [
            'text' => 'Surat pernyataan terkait Lembaga tidak sedang dalam konflik/sengketa (ditandatangani ketua yayasan dan Kepala Lembaga bermaterai 10000 atau (boleh materai 6000 2 lembar atau 6000+3000))',
            'name' => '',
        ],
        [
            'text' => 'Copy status Akreditasi Lembaga',
            'name' => '',
        ],
        [
            'text' => 'Pas foto ketua yayasan terbaru (Foto formal, background warna merah)',
            'name' => '',
        ],
        [
            'text' => 'Copy rekening a.n lembaga',
            'name' => 'Fotokopi_Rekening',
        ],
        [
            'text' => 'Surat Pernyataan Keabsahan Data/Dokumen yang di upload (bermaterai 10000 atau (boleh materai 6000 2 lembar atau 6000+3000))',
            'name' => '',
        ],
        [
            'text' => 'Berita Acara Keterlambatan Perpanjangan Izin Operasional (Bagi yang melewati masa berlaku)',
            'name' => '',
        ],
        [
            'text' => 'Surat pernyataan kegiatan belajar mengajar masih berjalan dan aktif (Bagi yang mengajukan pas pada tanggal berakhirnya masa berlaku)',
            'name' => '',
        ],
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
                        {!! $value['text'] !!}
                    </p>
                    <br>
                    <p class="text-primary">Tipe file upload : pdf, jpg, jpeg, png</p>
                </td>
                <td class="px-6 py-4">
                    <label for="file-{{ $key + 1 }}">
                        <div class="py-3 px-6 rounded-3xl border border-black text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white"
                            id="label-file-{{ $key + 1 }}">
                            Upload File
                        </div>
                    </label>
                    <input id="file-{{ $key + 1 }}" class="hidden" type="file" name="{{ $value['name'] }}"
                        accept=".pdf,.jpeg,.jpg,.png">
                </td>
            </tr>
        @endforeach


    </tbody>
</table>

<script>
    // jika ada file yang diupload ganti inerthml id 1 - 38
    for (let i = 1; i <= 38; i++) {
        document.getElementById(`file-${i}`).addEventListener('change', function() {
            // innterhtml sesuaikan dengan nama file
            document.getElementById(`label-file-${i}`).innerHTML = this.files[0].name
        })
    }
</script>
