<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="{{asset('home/css/styles.css')}}">
</head>
<body>
    <!-- NAVBAR INDEX -->
    <nav>
      <div class="">
        <img src="{{asset('home/img/EduLicense fix 3.png')}}" alt="Logo EduLicense" />
      </div>
      <ul>
        <li>
          <a href="#">Beranda</a>
        </li>
        <li>
          <a href="#">Panduan Permohonan</a>
        </li>
        <li>
          <a href="#">Statistik</a>
        </li>
        <li>
          <a href="#">Masuk</a>
        </li>
      </ul>
    </nav>
    <hr />
    <!-- NAVBAR INDEX -->
    @yield('navbar')
    <!-- Gambar Awal -->
    <div class="tampilan-awal">
      <div class="gambar-awal">
        <img src="{{asset('home/img/Gambar Awal.png')}}" alt="gambar-awal" />
      </div>
      <div class="tagline">
        <p>EduLicense: Mewujudkan Mimpi Satuan Pendidikan Anda !</p>
      </div>
    </div>
    <!-- Gambar Awal -->
    <!-- Panduan Perizinan -->
    <div class="container-panduan-perizinan">
      <div class="panduan-perizinan">Panduan Perizinan</div>
    </div>

    <div class="teks-panduan-perizinan">
      <p>
        Setelah Anda memenuhi semua persyaratan dan mengumpulkan dokumen yang
        diperlukan, saatnya untuk mengajukan permohonan perizinan ke pihak
        berwenang. Pastikan untuk melengkapi formulir permohonan dengan cermat
        dan jujur
      </p>
    </div>

    <div class="container-kotak-cokelat" id="#panduan">
      <div class="kotak-cokelat">
        <div class="daftar-ulang">
          <div class="gambar-bulat">
            <img src="{{asset('home/img/Folder.png')}}" alt="LogoDaftarUlang" />
          </div>
          <div class="tombol-putih">
            <a href="#">Daftar Ulang Izin Operasional Satuan Pendidikan</a>
          </div>
        </div>
      </div>
      <div class="kotak-cokelat-1">
        <div class="izin-pendirian">
          <div class="gambar-bulat">
            <img src="{{asset('home/img/School.png')}}" alt="LogoIzinPendirian" />
          </div>
          <div class="tombol-putih">
            <a href="#">Izin Pendirian Satuan Pendidikan</a>
          </div>
        </div>
      </div>
      <div class="kotak-cokelat-2">
        <div class="izin-operasional">
          <div class="gambar-bulat">
            <img src="{{asset('home/img/Compliant.png')}}" alt="LogoIzinOperasional" />
          </div>
          <div class="tombol-putih">
            <a href="#">Izin Operasional Satuan Pendidikan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Panduan Perizinan -->

    <!-- Alur Perizinan -->
    <div class="container-alur-perizinan">
      <div class="alur-perizinan">Alur Perizinan</div>
    </div>
    <div class="gambar-alur-perizinan">
      <img src="{{asset('home/img/Alur Perizinan.png')}}" alt="Alur Perizinan" />
    </div>
    <!-- Alur Perizinan -->

    <!-- Data Statistik -->
    <div class="container-data-statistik">
      <div class="data-statistik">Data Statistik</div>
    </div>
    <div class="tombol-data-statistik">
      <a href="/data-statistik-daftarulang"
        >Daftar Ulang Izin Operasional</a
      >
      <a href="/data-statistik-izinpendirian">Izin Pendirian</a>
      <a href="/data-statistik-izinoperasional">Izin Operasional</a>
    </div>

    <!-- Data Statistik -->

    <!-- Footer -->
    <div class="footer">
      <div class="edu-license-2023">EduLicense 2023</div>
    </div>
  </body>
</html>