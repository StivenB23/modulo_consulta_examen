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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="container_auth">
        <div class="header">
            <img
                src="{{ asset('img/logo-citogen.png') }}"
                alt="Logo de Citogen"
                class="logo"
                data-aos="zoom-in"
                data-aos-duration="700"
            >
        </div>

        <div class="container_404">
            <h1
                data-aos="fade-down"
                data-aos-duration="700"
            >
                404 | Página no encontrada
            </h1>

            <p
                data-aos="fade-up"
                data-aos-duration="700"
            >
                Lo sentimos, la página que buscas no existe.
            </p>

            <a href="{{ route('dashboard') }}" 
                class="btn"
            >
                Regresar al inicio
            </a>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- AOS.JS --}}
    <script>
        AOS.init();
    </script>
</body>
</html>
