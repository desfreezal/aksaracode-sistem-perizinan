<div class="w-80 min-h-screen bg-edu-bg space-y-5 py-2 pt-16 pl-9 pr-12 box-border" id="sidebar">
    {{-- isi --}}
    <a href="{{ route('admin-dinas-lengkap-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-dinas-lengkap-data', 'admin-dinas-kelengkapan-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/kelengkapan data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['admin-dinas-lengkap-data', 'admin-dinas-kelengkapan-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Kelengkapan Data
        </h1>
    </a>
    <a href="{{ route('admin-dinas-validasi-data') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-dinas-validasi-data', 'admin-dinas-detail-validasi', 'admin-dinas-jadwal-survey', 'admin-dinas-validasi-survey']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/validasi data.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['admin-dinas-validasi-data', 'admin-dinas-detail-validasi', 'admin-dinas-jadwal-survey', 'admin-dinas-validasi-survey']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Validasi Data
        </h1>
    </a>
    <a href="{{ route('admin-dinas-survey', ['id' => 1]) }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-dinas-survey']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/survey.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['admin-dinas-survey']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Survey
        </h1>
    </a>
    <a href="{{ route('admin-dinas-monitoring') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-dinas-monitoring', 'admin-dinas-monitoring-detail']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/monitoring.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white {{ in_array(Route::currentRouteName(), ['admin-dinas-monitoring', 'admin-dinas-monitoring-detail']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('admin-dinas-notifikasi') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'admin-dinas-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('sidebar/notifikasi.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'admin-dinas-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Notifikasi
        </h1>
    </a>
    <a href="{{ route('admin-dinas-pengesahan-dokumen') }}"
        class="cursor-pointer flex items-center pl-3 pr-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['admin-dinas-pengesahan-dokumen', 'admin-dinas-jenis-pengesahan', 'admin-dinas-data-pengesahan', 'admin-dinas-buat-surat']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}  
        group">
        <img src="{{ asset('sidebar/pengesahan dok.png') }}"
            class="object-contain w-6 h-6 group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['admin-dinas-pengesahan-dokumen', 'admin-dinas-jenis-pengesahan', 'admin-dinas-data-pengesahan', 'admin-dinas-buat-surat']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-sm uppercase font-normal">
            Pengesahan Dokumen
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
    <a href="{{ route('admin-dinas-chatting') }}">
        <img src="{{ asset('pemohon/img/chat.png') }}" class="w-full p-3" alt="">
    </a>
</div>
