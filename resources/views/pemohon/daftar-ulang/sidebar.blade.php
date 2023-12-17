<div class="w-80 min-h-screen bg-edu-bg space-y-3 py-2" id="sidebar">
    <a href="/dashboard-pemohon/daftar-ulang/data"
        class="cursor-pointer flex items-center pl-11 w-full  {{ Request::is('dashboard-pemohon/daftar-ulang/data') ? 'bg-white shadow' : '' }} hover:bg-white gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Project.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal text-edu-black">
            Data Pemohon
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-11 w-full {{ Route::currentRouteName() === 'detail' ? 'bg-white shadow' : '' }} hover:bg-white hover:shadow gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Check list.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal text-edu-black">
            Detail Daftar Ulang
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-11 w-full hover:bg-white {{ Route::currentRouteName() === 'berkas' ? 'bg-white shadow' : '' }}  hover:shadow gap-x-3 py-2">
        <img src="{{ asset('pemohon/img/Open Pane.png') }}" class="object-contain" alt="1">
        <h1 class="text-base font-normal">
            Upload Persyaratan
        </h1>
    </a>
</div>
