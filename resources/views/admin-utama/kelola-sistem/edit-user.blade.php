@extends('admin-utama.layout')

@section('content')
    <div class="h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-utama.sidebar')

            <div class="block pl-[34px] pr-[88px] py-7 box-border w-full min-h-screen" id="content">
                <h1 class="mb-9 font-semibold text-xl">Edit Akun Pengguna</h1>

                <form action="{{ route('admin-utama-daftar-user') }}" class="space-y-4 w-full">
                    <div class="space-y-1">
                        <label for="jenid" class="w-full block">Jenis Identitas</label>
                        <input readonly id="jenid" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="noid" class="w-full block">Nomor Identitas (NIK/PASSPORT)</label>
                        <input readonly id="noid" type="number"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="username" class="w-full block">Username</label>
                        <input readonly id="username" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="email" class="w-full block">Alamat Email</label>
                        <input readonly id="email" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="nama" class="w-full block">Nama Lengkap</label>
                        <input readonly id="nama" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="jenkel" class="w-full block">Jenis Kelamin</label>
                        <input readonly id="jenkel" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="tempatlahir" class="w-full block">Tempat Lahir</label>
                        <input readonly id="tempatlahir" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="tanggallahir" class="w-full block">Tanggal Lahir</label>
                        <input readonly id="tanggallahir" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="provinsi" class="w-full block">Provinsi</label>
                        <input readonly id="provinsi" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="kabkota" class="w-full block">Kabupaten/ Kota</label>
                        <input readonly id="kabkota" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="kecamatan" class="w-full block">Kecamatan</label>
                        <input readonly id="kecamatan" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="kelurahan" class="w-full block">Kelurahan</label>
                        <input readonly id="kelurahan" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="alamat" class="w-full block">Alamat</label>
                        <input readonly id="alamat" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="nohp" class="w-full block">No HP Aktif</label>
                        <input readonly id="nohp" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label for="pekerjaan" class="w-full block">Pekerjaan</label>
                        <input readonly id="pekerjaan" type="text"
                            class="w-full text-edu-black border-primary border-2 rounded-lg">
                    </div>


                    <div class="flex justify-center items-center">
                        <button type="submit" class="mt-10 rounded-lg bg-primary text-white px-3 py-4 ">
                            Simpan Data
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
