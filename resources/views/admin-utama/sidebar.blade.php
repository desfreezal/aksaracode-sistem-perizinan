<div class="w-80 min-h-screen bg-edu-bg space-y-5 py-2 pt-16 pl-9 pr-12 box-border" id="sidebar">
    {{-- isi --}}
    <a href="{{ route('admin-utama-monitoring') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-utama-monitoring', 'admin-utama-monitoring-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/monitoring.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white {{ in_array(Route::currentRouteName(), ['admin-utama-monitoring', 'admin-utama-monitoring-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('admin-utama-notifikasi') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'admin-utama-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/notifikasi.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'admin-utama-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Notifikasi
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/kelola sistem.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Kelola Sistem
        </h1>
    </a>
</div>

{{-- <div class="fixed w-12 h-12 bottom-28 rounded-full left-8 bg-primary">
    <a href="{{ route('admin-utama-chatting') }}">
        <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
    </a>
</div> --}}
