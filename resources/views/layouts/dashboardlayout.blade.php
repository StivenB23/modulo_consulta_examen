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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    {{-- DATATABLES --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
</head>
<body>
    <main class="container_dashboard">
        <div class="sidebar">
            <img
                src="{{ asset('img/logo-citogen.png') }}"
                alt="Logo de Citogen"
                class="logo"
                data-aos="zoom-in"
                data-aos-duration="700"
            >

            {{-- ADMIN --}}
            @if (Auth::user()->role == 'administrador')
                <div class="items">
                    <a href="{{ route('dashboard.specialists') }}" class="{{ Str::startsWith(request()->path(), 'dashboard/specialists') ? 'active item' : 'item' }}">
                        <i class="bi bi-person-arms-up"></i>
                        <p>
                            Especialistas
                        </p>
                    </a>

                    <a href="{{ route('dashboard.companies') }}" class="{{ Str::startsWith(request()->path(), 'dashboard/companies') ? 'active item' : 'item' }}">
                        <i class="bi bi-building"></i>

                        <p>
                            Entidades
                        </p>
                    </a>
                </div>
            @endif
            {{-- SPECIALIST --}}

            {{-- USER --}}

            {{-- LOGOUT --}}
            <div class="logout_container">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="logout">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="header">
                <h3 class="name">
                    {{ Auth::user()->name }} <span>({{ Auth::user()->role }})</span>
                </h3>
            </div>

            <div class="content">
                <div class="card">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <!-- JAVASCRIPT -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- AOS.JS --}}
    <script>
        AOS.init();
    </script>

    @yield('datatable')
</body>
</html>
