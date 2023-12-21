<div class="w-80 min-h-screen bg-putih-dasar shadow-[rgba(0,0,0,0.25)_5px_0px_5px_-5px] space-y-2 py-2 text-for-icon font-medium box-border"
    id="sidebar">
    {{-- isi --}}
    <a href="{{ url('/dashboard-surveyor') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:shadow hover:text-white gap-x-3 py-2 group">
        <img src="{{ asset('surveyor/img/sidebar/dashboard.png') }}"
            class="object-contain group-hover:filter-gray-to-white" alt="1">
        <h1 class="text-base font-normal">
            Dashboard
        </h1>
    </a>
    <a href="{{ route('surveyor-lengkap-data') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2 group
        {{ in_array(Route::currentRouteName(), ['surveyor-lengkap-data', 'surveyor-riwayat-permohonan']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        ">
        <img src="{{ asset('surveyor/img/sidebar/permohonan.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['surveyor-lengkap-data', 'surveyor-riwayat-permohonan']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Permohonan
        </h1>
    </a>
    <a href="{{ route('surveyor-panduan-perizinan') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['surveyor-panduan-perizinan', 'surveyor-panduan-daftar-ulang', 'surveyor-panduan-izin', 'surveyor-panduan-operasional']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        group">
        <img src="{{ asset('surveyor/img/sidebar/buku panduan.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['surveyor-panduan-perizinan', 'surveyor-panduan-daftar-ulang', 'surveyor-panduan-izin', 'surveyor-panduan-operasional']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Panduan Perizinan
        </h1>
    </a>
    <a href="{{ route('surveyor-monitoring') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'surveyor-monitoring' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('surveyor/img/sidebar/monitoring.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'surveyor-monitoring' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('surveyor-notifikasi') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'surveyor-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('surveyor/img/sidebar/notifikasi.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'surveyor-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Notifikasi
        </h1>
    </a>
    <a href="{{ route('surveyor-chatting') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['surveyor-chatting', 'surveyor-detail-chatting']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        group">
        <img src="{{ asset('surveyor/img/sidebar/chatting 1.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'surveyor-chatting' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Chatting
        </h1>
    </a>
    <a href="#"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === '' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('surveyor/img/sidebar/kelola 1.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === '' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Kelola Sistem
        </h1>
    </a>
</div>
