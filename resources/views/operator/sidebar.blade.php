<div class="w-80 min-h-screen bg-putih-dasar shadow-[rgba(0,0,0,0.25)_5px_0px_5px_-5px] space-y-2 py-2 text-for-icon font-medium box-border"
    id="sidebar">
    {{-- isi --}}
    <a href="{{ url('/dashboard-operator') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:shadow hover:text-white gap-x-3 py-2 group">
        <img src="{{ asset('operator/img/sidebar/dashboard.png') }}"
            class="object-contain group-hover:filter-gray-to-white" alt="1">
        <h1 class="text-base font-normal">
            Dashboard
        </h1>
    </a>
    <a href="{{ route('operator-lengkap-data') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2 group
        {{ in_array(Route::currentRouteName(), ['operator-lengkap-data', 'operator-validasi-data']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        ">
        <img src="{{ asset('operator/img/sidebar/permohonan.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['operator-lengkap-data', 'operator-validasi-data']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Permohonan
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('operator/img/sidebar/buku panduan.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Panduan Perizinan
        </h1>
    </a>
    <a href="{{ route('operator-monitoring') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'operator-monitoring' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('operator/img/sidebar/monitoring.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'operator-monitoring' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('operator-notifikasi') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'operator-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('operator/img/sidebar/notifikasi.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'operator-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Notifikasi
        </h1>
    </a>
    <a href="{{ route('operator-chatting') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['operator-chatting', 'operator-detail-chatting']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        group">
        <img src="{{ asset('operator/img/sidebar/chatting 1.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'operator-chatting' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Chatting
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('operator/img/sidebar/kelola 1.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Kelola Sistem
        </h1>
    </a>
</div>
