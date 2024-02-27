<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('img/favicon-citogen.png') }}" type="image/x-icon">
    <title>@yield('title', 'Genetica')</title>
    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <main class="container_auth">
        <div class="header">
            <img
                src="{{ asset('img/logo-citogen.png') }}"
                alt="Logo de Citogen"
                class="logo"
            >
        </div>

        <div class="container_form">
            @yield('content')
        </div>
    </main>
    <!-- JAVASCRIPT -->

    <script src="{{ asset('js/password.js') }}"></script>
</body>
</html>
