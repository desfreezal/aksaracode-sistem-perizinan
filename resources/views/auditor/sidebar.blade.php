<div class="w-80 min-h-screen bg-putih-dasar shadow-[rgba(0,0,0,0.25)_5px_0px_5px_-5px] space-y-2 py-2 text-for-icon font-medium box-border"
    id="sidebar">
    {{-- isi --}}
    <a href="{{ url('/dashboard-auditor') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:shadow hover:text-white gap-x-3 py-2 group">
        <img src="{{ asset('auditor/img/sidebar/dashboard.png') }}"
            class="object-contain group-hover:filter-gray-to-white" alt="1">
        <h1 class="text-base font-normal">
            Dashboard
        </h1>
    </a>
    <a href="{{ route('auditor-panduan-perizinan') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ in_array(Route::currentRouteName(), ['auditor-panduan-perizinan', 'auditor-panduan-daftar-ulang', 'auditor-panduan-izin', 'auditor-panduan-operasional']) ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }}
        group">
        <img src="{{ asset('auditor/img/sidebar/buku panduan.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ in_array(Route::currentRouteName(), ['auditor-panduan-perizinan', 'auditor-panduan-daftar-ulang', 'auditor-panduan-izin', 'auditor-panduan-operasional']) ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Panduan Perizinan
        </h1>
    </a>
    <a href="{{ route('auditor-monitoring') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'auditor-monitoring' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('auditor/img/sidebar/monitoring.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'auditor-monitoring' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Monitoring
        </h1>
    </a>
    <a href="{{ route('auditor-notifikasi') }}"
        class="cursor-pointer flex items-center pl-11 mx-5 rounded-xl hover:bg-primary hover:text-white hover:shadow gap-x-3 py-2
        {{ Route::currentRouteName() === 'auditor-notifikasi' ? 'bg-primary shadow text-white hover:bg-primary-light' : '' }} 
        group">
        <img src="{{ asset('auditor/img/sidebar/notifikasi.png') }}"
            class="object-contain group-hover:filter-gray-to-white  {{ Route::currentRouteName() === 'auditor-notifikasi' ? 'filter-gray-to-white' : '' }}"
            alt="1">
        <h1 class="text-base font-normal">
            Notifikasi
        </h1>
    </a>
</div>
