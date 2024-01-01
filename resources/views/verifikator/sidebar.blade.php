<div class="w-80 min-h-screen bg-edu-bg space-y-5 py-2 pt-16 pl-9 pr-12 box-border" id="sidebar">
    {{-- isi --}}
    <a href="{{ route('verifikator-pembaruan-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['verifikator-pembaruan-data', 'verifikator-detail-pembaruan-data']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/pembaruan data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['verifikator-pembaruan-data', 'verifikator-detail-pembaruan-data']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Pembaruan Data
        </h1>
    </a>
    <a href="{{ route('verifikator-lengkap-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['verifikator-lengkap-data', 'verifikator-kelengkapan-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/kelengkapan data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['verifikator-lengkap-data', 'verifikator-kelengkapan-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Kelengkapan Data
        </h1>
    </a>
    <a href="{{ route('verifikator-validasi-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['verifikator-validasi-data', 'verifikator-detail-validasi', 'verifikator-jadwal-survey', 'verifikator-validasi-survey']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/validasi data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['verifikator-validasi-data', 'verifikator-detail-validasi', 'verifikator-jadwal-survey', 'verifikator-validasi-survey']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Validasi Data
        </h1>
    </a>
    <a href="{{ route('verifikator-survey', ['id' => 1]) }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['verifikator-survey', 'verifikator-isi-survey']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/survey.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['verifikator-survey', 'verifikator-isi-survey']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Survey
        </h1>
    </a>
    <a href="{{ route('verifikator-monitoring') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['verifikator-monitoring', 'verifikator-monitoring-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/monitoring.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white {{ in_array(Route::currentRouteName(), ['verifikator-monitoring', 'verifikator-monitoring-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('verifikator-notifikasi') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'verifikator-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/notifikasi.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'verifikator-notifikasi' ? 'filter-gray-to-white' : '' }}"
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

<div class="fixed w-12 h-12 bottom-28 rounded-full left-8 bg-primary">
    <a href="{{ route('verifikator-chatting') }}">
        <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
    </a>
</div>
