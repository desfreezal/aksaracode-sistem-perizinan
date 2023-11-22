
<!DOCTYPE html>

<html>
  <head>
    <title>Index EduLicense</title>
    <link rel="stylesheet" href="{{asset('pemohon/css/styles.css')}}" />
  </head>

  <style>
    .parent{
      display: flex;
    }

    
  </style>

  <body>
     <!-- NAVBAR Dashboard -->
     <nav>
      <div class="">
        <img src="{{('pemohon/img/EduLicense fix 3.png')}}" alt="Logo EduLicense" />
      </div>
      <ul>
        <li>
          <a href="#">Beranda</a>
        </li>
        <li>
          <a href="#">Status Permohonan</a>
        </li>
        <li>
          <a href="#"
            ><img
              src="{{('pemohon/img/Notif Logo.png')}}"
              alt="Notif Logo"
              style="width: 25px"
          /></a>
        </li>
        <li>
          <a href="#"
            ><img
              src="{{('pemohon/img/Profil Logo.png')}}"
              alt="Logo Profil"
              style="width: 25px"
          /></a>
        </li>
      </ul>
    </nav>
    <hr />
    <!-- Navbar Dashboard -->
    <div class="container-kotak-cokelat" style="gap: 10px; margin: 80px 50px">
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
    <!-- Footer -->
    <div class="footer" style="padding-top: 0px">
      <div class="edu-license-2023">EduLicense 2023</div>
    </div>
  </body>
</html>
