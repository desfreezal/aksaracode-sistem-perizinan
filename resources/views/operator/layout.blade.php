<!DOCTYPE html>

<html>

<head>
    <title>Index EduLicense</title>
    <link rel="stylesheet" href="{{ asset('operator/css/styles.css') }}" />
    <script defer src="{{ asset('home/js/alpine.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <!-- NAVBAR Dashboard -->
    <nav>
        <div class="flex items-center">
            <img src="{{ asset('home/img/EduLicense fix 3.png') }}" alt="Logo EduLicense" />
        </div>
        <ul class="py-6 pr-6">
            <li>
                <div class="parent">
                    <a href="/dashboard-operator">
                        Dashboard
                    </a>
                </div>

            </li>
            <li>
                <div class="parent">
                    <a href="#" data-dropdown-toggle="notifDropDown">
                        <img class="images" src="{{ asset('operator/img/Notif Logo.png') }}" alt="Notif Logo"
                            style="width: 25px"></a>
                </div>

                {{-- NOTIFICATION CONTAINER --}}
                <div id="notifDropDown"
                    class="z-10 hidden bg-white rounded-lg dark:bg-gray-700 shadow-lg drop-shadow-xl border box-border">
                    @hasSection('notif-container')
                        @yield('notif-container')
                    @else
                        <button class="p-5 flex justify-end w-full" id="closeNotif">X</button>
                        <div class="overflow-y-auto mx-5">

                            <div onclick="window.location.href = '{{ route('operator-notifikasi') }}'"
                                class="cursor-pointer flex gap-x-4 items-center px-4 py-4 bg-primary hover:bg-primary-light rounded-xl mb-3 text-white">
                                <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" data-slot="icon"
                                        class="w-9 h-9 text-primary font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>

                                <div>
                                    <p>ID 1234589 mengajukan permohonan</p>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6 text-white">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <p>Just now</p>
                                    </div>
                                </div>
                            </div>

                            <div onclick="window.location.href = '{{ route('operator-notifikasi') }}'"
                                class="flex gap-x-4 items-center px-4 py-4 bg-primary rounded-xl mb-3 text-white hover:bg-primary-light cursor-pointer">
                                <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" data-slot="icon"
                                        class="w-9 h-9 text-primary font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>

                                <div>
                                    <p>ID 1245099 mengajukan permohonan</p>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6 text-white">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <p>Just now</p>
                                    </div>
                                </div>
                            </div>

                            <div onclick="window.location.href = '{{ route('operator-notifikasi') }}'"
                                class="flex gap-x-4 items-center px-4 py-4 bg-primary rounded-xl mb-3 text-white hover:bg-primary-light cursor-pointer">
                                <div class="w-12 h-12 rounded-lg bg-white flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" data-slot="icon"
                                        class="w-9 h-9 text-primary font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>

                                <div>
                                    <p>ID 2355799 mengajukan permohonan</p>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6 text-white">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <p>Just now</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                </div>

            </li>
            <li>
                <a href="#" data-dropdown-toggle="profileDropDown"><img
                        src="{{ asset('home/img/Profil User Logo.png') }}" alt="Logo Profil" style="width: 25px" /></a>

                <div id="profileDropDown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 max-w-[292px]">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 block"
                        aria-labelledby="profileDropDownButton">
                        <li>
                            <a href="{{ route('operator-profile') }}"
                                class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil
                                Pengguna</a>
                        </li>
                        <li>
                            <a href="#" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
                                class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Operator</a>
            </li>

            {{-- LOGOUT MODAL --}}
            <div id="logout-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 rounded-t ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="logout-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="flex flex-col justify-center items-center space-x-4">

                                <h1 class="font-bold text-3xl text-primary mb-3">Keluar</h1>

                                <p class="font-thin text-edu-black">Anda Yakin Ingin Keluar?</p>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex gap-x-11 items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                            <button data-modal-hide="logout-modal" type="button" id="closeModal"
                                class="py-1 px-12 rounded-3xl border border-edu-black text-primary hover:bg-abu-abu ">Kembali</button>

                            <form action="{{ url('/landing-pages', []) }}" method="get">
                                <button type="submit" data-modal-hide="logout-modal" type="button" id="closeModal"
                                    class="py-1 px-12 rounded-3xl bg-primary hover:bg-primary-light text-white ">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </nav>
    <hr />
    <!-- Navbar Dashboard -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="footer" style="padding-top: 0px">
        <div class="edu-license-2023">EduLicense 2023</div>
    </div>

    @stack('scripts')
</body>

</html>
