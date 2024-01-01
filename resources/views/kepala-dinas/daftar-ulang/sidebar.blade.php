<div x-data="{ isOpen: false }" :class="isOpen ? 'w-80' : 'w-20'" class=" min-h-screen relative space-y-3 py-2 duration-500"
    id="sidebar">
    <button @click="isOpen = !isOpen"
        class="flex items-center justify-center w-10 h-10 bg-gray-300 rounded-md m-4 float-right">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" x-show="!isOpen"
            class="w-6 h-6 fill-current text-gray-700">
            <path fill-rule="evenodd"
                d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                clip-rule="evenodd" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" x-show="isOpen"
            class="w-6 h-6 fill-current text-gray-700">
            <path fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
        </svg>

    </button>
    {{-- END BUTTON --}}
    <div x-show.transition.duration.500ms="isOpen" class="sidebar-content w-80 transition-all">
        <a href="/dashboard-kepala-dinas/daftar-ulang/data"
            class="cursor-pointer flex items-center pl-11 w-full  {{ Request::is('dashboard-kepala-dinas/daftar-ulang/data') || Route::currentRouteName() === 'kepala-dinas-daftar-ulang' ? 'bg-white shadow' : '' }} hover:bg-white gap-x-3 py-2">
            <img src="{{ asset('admin-dinas/img/Project.png') }}" class="object-contain" alt="1">
            <h1 class="text-base font-normal text-edu-black">
                Data kepala-dinas
            </h1>
        </a>
        <a href="#"
            class="cursor-pointer flex items-center pl-11 w-full {{ Route::currentRouteName() === 'kepala-dinas-detail' ? 'bg-white shadow' : '' }} hover:bg-white hover:shadow gap-x-3 py-2">
            <img src="{{ asset('admin-dinas/img/Check list.png') }}" class="object-contain" alt="1">
            <h1 class="text-base font-normal text-edu-black">
                Detail Daftar Ulang
            </h1>
        </a>
        <a href="#"
            class="cursor-pointer flex items-center pl-11 w-full hover:bg-white {{ Route::currentRouteName() === 'kepala-dinas-berkas' ? 'bg-white shadow' : '' }}  hover:shadow gap-x-3 py-2">
            <img src="{{ asset('admin-dinas/img/Submit.png') }}" class="object-contain" alt="1">
            <h1 class="text-base font-normal">
                Upload Persyaratan
            </h1>
        </a>
    </div>
</div>

<div class="fixed w-12 h-12 bottom-28 rounded-full left-8 bg-primary">
    <a href="/chatting">
        <img src="{{ asset('admin-dinas/img/chat.png') }}" class="w-full p-3" alt="">
    </a>
</div>
