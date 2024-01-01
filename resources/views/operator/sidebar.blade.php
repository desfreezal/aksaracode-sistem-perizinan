<div class="w-80 min-h-screen bg-edu-bg space-y-5 py-2 pt-16 pl-9 pr-12 box-border"
    id="sidebar">
    {{-- isi --}}
    <a href="{{ route('operator-pembaruan-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['operator-pembaruan-data', 'operator-detail-pembaruan-data']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/pembaruan data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['operator-pembaruan-data', 'operator-detail-pembaruan-data']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Pembaruan Data
        </h1>
    </a>
    <a href="{{ route('operator-lengkap-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['operator-lengkap-data', 'operator-kelengkapan-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/kelengkapan data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['operator-lengkap-data', 'operator-kelengkapan-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Kelengkapan Data
        </h1>
    </a>
    {{-- <a href="{{ route('operator-validasi-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['operator-validasi-data', 'operator-detail-validasi', 'operator-jadwal-survey', 'operator-validasi-survey']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/validasi data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['operator-validasi-data', 'operator-detail-validasi', 'operator-jadwal-survey', 'operator-validasi-survey']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Validasi Data
        </h1>
    </a> --}}
    {{-- <a href="#"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/survey.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Survey
        </h1>
    </a> --}}
    <a href="{{ route('operator-monitoring') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['operator-monitoring', 'operator-monitoring-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/monitoring.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white {{ in_array(Route::currentRouteName(), ['operator-monitoring', 'operator-monitoring-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('operator-notifikasi') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'operator-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/notifikasi.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'operator-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Notifikasi
        </h1>
    </a>
    {{-- <a href="#"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/kelola sistem.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Kelola Sistem
        </h1>
    </a> --}}
</div>

<div class="fixed w-12 h-12 bottom-28 rounded-full left-8 bg-primary">
    <a href="/chatting">
        <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
    </a>
</div>
