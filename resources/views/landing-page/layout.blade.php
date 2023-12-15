<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title') | EduLicense
    </title>
    <link rel="stylesheet" href="{{ asset('home/css/styles.css') }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script defer src="{{ asset('home/js/alpine.min.js') }}"></script>
</head>

<body>
    <!-- NAVBAR INDEX -->
    <nav class="border-b border-primary">
        <div class="">
            <img src="{{ asset('home/img/EduLicense fix 3.png') }}" alt="Logo EduLicense" />
        </div>
        <ul class="mr-6">
            <li class="my-6">
                <a href="/landing-pages">Beranda</a>
            </li>
            <li class="my-6">
                <a href="/landing-page#panduan">Panduan Permohonan</a>
            </li>
            <li class="my-6">
                <a href="#">Statistik</a>
            </li>
            <li class="my-6">
                <a href="#">Masuk</a>
            </li>
        </ul>
    </nav>
    <hr />

    <main class="mt-8 mx-11">
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="footer">
        <div class="edu-license-2023">EduLicense 2023</div>
    </div>
    @stack('scripts')

</body>

</html>
