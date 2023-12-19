<!DOCTYPE html>

<html>

<head>
    <title>Index EduLicense</title>
    <link rel="stylesheet" href="{{ asset('operator/css/styles.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <!-- NAVBAR Dashboard -->
    <nav >
        <div class="flex items-center">
            <img src="{{ asset('home/img/EduLicense fix 3.png') }}" alt="Logo EduLicense" />
        </div>
        <ul class="py-6 pr-6">
            <li>
                <div class="parent">
                    <a href="#">
                        <img class="images" src="{{ asset('operator/img/Notif Logo.png') }}" alt="Notif Logo"
                            style="width: 25px"></a>
                </div>

            </li>
            <li>
                <a href="#"><img src="{{ asset('home/img/Profil User Logo.png') }}" alt="Logo Profil"
                        style="width: 25px" /></a>
            </li>
            <li>
                <a href="#">Micella</a>
            </li>
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