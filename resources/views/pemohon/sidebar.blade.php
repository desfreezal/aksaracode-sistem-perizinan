<div class="w-80 h-full bg-edu-bg space-y-3 py-2">
    <a href="/dashboard-pemohon/profile"
        class="cursor-pointer flex items-center pl-11 w-full  {{ Request::is('dashboard-pemohon/profile') ? 'bg-white shadow' : '' }} hover:bg-white gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Project.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal text-edu-black">
            Profil Pengguna
        </h1>
    </a>
    <a href="#" class="cursor-pointer flex items-center pl-11 w-full hover:bg-white hover:shadow gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Check list.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal text-edu-black">
            Riwayat Permohonan
        </h1>
    </a>
    <a href="#" class="cursor-pointer flex items-center pl-11 w-full hover:bg-white hover:shadow gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Open Pane.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal text-primary">
            Keluar
        </h1>
    </a>
</div>
