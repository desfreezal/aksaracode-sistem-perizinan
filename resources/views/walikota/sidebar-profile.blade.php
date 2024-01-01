<div class="w-80 min-h-screen bg-edu-bg space-y-5 py-2 pt-16 pl-9 pr-12 box-border" id="sidebar">
    <a href="/dashboard-walikota/profile"
        class="cursor-pointer flex items-center pl-3 pr-5 w-full rounded-xl uppercase  {{ Request::is('dashboard-walikota/profile') ? 'bg-primary-light' : '' }} hover:bg-primary gap-x-8 py-1">
        <img src="{{ asset('pemohon/img/Project.png') }}"
            class="object-contain {{ Request::is('dashboard-walikota/profile') ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1
            class="text-sm font-normal  {{ Request::is('dashboard-walikota/profile') ? 'text-white' : 'text-edu-black ' }}">
            Profil Pengguna
        </h1>
    </a>
    <a href="#" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
        class="cursor-pointer flex items-center pl-3 pr-5 w-full rounded-xl uppercase gap-x-8 py-1">
        <img src="{{ asset('pemohon/img/Open Pane.png') }}" class="object-contain" alt="1">
        <h1 class="text-sm font-normal  ">
            Keluar
        </h1>
    </a>
</div>
