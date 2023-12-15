<!DOCTYPE html>

<html>

<head>
    <title>Index EduLicense</title>
    <link rel="stylesheet" href="{{ asset('pemohon/css/styles.css') }}" />
</head>

<style>
    .parent {
        display: flex;
    }
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <!-- NAVBAR Dashboard -->
    <nav>
        <div class="">
            <img src="{{ 'pemohon/img/EduLicense fix 3.png' }}" alt="Logo EduLicense" />
        </div>
        <ul>
            <li>
                <a href="#">Beranda</a>
            </li>
            <li>
                <a href="#">Status Permohonan</a>
            </li>
            <li>
                <a href="#" id="notifDropDownButton" data-dropdown-toggle="notifDropDown">
                    <img src="{{ 'pemohon/img/Notif Logo.png' }}" alt="Notif Logo" style="width: 25px" />
                </a>

                {{-- EMPTY NOTIFICATION --}}
                <div id="notifDropDown"
                    class="z-10 hidden bg-white rounded-lg dark:bg-gray-700 shadow-lg drop-shadow-xl border box-border">
                    <button class="float-right m-5" id="closeNotif">X</button>
                    <div class="w-60 text-center flex justify-center items-center flex-col m-16">
                        <img src="{{ asset('pemohon/img/Illustration.png') }}"
                            class="aspect-square object-fill w-40 mb-7" alt="">
                        <p>Kami akan memberi tahu Anda setelah kami melakukan
                            sesuatu untukmu</p>
                    </div>
                </div>
            </li>
            <li>
                <button href="#" id="profileDropDownButton" data-dropdown-toggle="profileDropDown"><img
                        src="{{ 'pemohon/img/Profil Logo.png' }}" alt="Logo Profil" style="width: 25px" /></button>

                <div id="profileDropDown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 max-w-[292px]">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 block"
                        aria-labelledby="profileDropDownButton">
                        <li>
                            <a href="#"
                                class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil
                                Pengguna</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat
                                Permohonan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li>

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->


            </li> --}}
        </ul>
    </nav>
    <hr />
    <!-- Navbar Dashboard -->

    <main class="my-20 mx-[50px]">
        @yield('content')
    </main>


    <!-- Footer -->
    <div class="footer" style="padding-top: 0px">
        <div class="edu-license-2023">EduLicense 2023</div>
    </div>

    <script>
        
    </script>

    @stack('scripts')

</body>

</html>
