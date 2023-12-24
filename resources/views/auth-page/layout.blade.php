<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title') | EduLicense
    </title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('auth/css/styles.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

</head>
<body>
    @yield('content')
    @stack('scripts')
</body>
</html>