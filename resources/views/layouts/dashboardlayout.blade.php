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
    {{-- SELECT --}}
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
            @if (Auth::user()->role == 'especialista')
                <div class="items">
                    <a href="{{ route('dashboard.patients') }}" class="{{ Str::startsWith(request()->path(), 'dashboard/patients') ? 'active item' : 'item' }}">
                        <i class="bi bi-bandaid"></i>
                        <p>
                            Pacientes
                        </p>
                    </a>
                    
                    <a href="{{ route('dashboard.exams') }}" class="{{ Str::startsWith(request()->path(), 'dashboard/exams') ? 'active item' : 'item' }}">
                        <i class="bi bi-file-earmark-spreadsheet"></i>
                        <p>
                            Examenes
                        </p>
                    </a>
                </div>
            @endif

            {{-- Patient --}}
            @if (Auth::user()->role == 'cliente')
                <div class="items">
                    <a href="{{ route('dashboard') }}" class="{{ request()->path() === 'dashboard' ? 'active item' : 'item' }}">
                        <i class="bi bi-clipboard2-data"></i>
                        <p>
                            Mi Información
                        </p>
                    </a>
                    <a href="{{ route('dashboard.patients.my-exams') }}" class="{{ Str::startsWith(request()->path(), 'dashboard/patients/exams') ? 'active item' : 'item' }}">
                        <i class="bi bi-activity"></i>
                        <p>
                            Mis Examenes
                        </p>
                    </a>
                </div>
            @endif


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
    <script src="{{ asset('js/confirmations.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/searcher.js') }}"></script>
    <script src="{{ asset('js/exams.js') }}"></script>

    {{-- SWEET ALERT --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    {{-- AOS.JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        var datat=document.querySelector("#datat"); 
        var dataTable=new DataTable("#datat",{ 
          perPage:20,
          labels: {
              placeholder: "Busca por un campo...",
              perPage: "{select} registros por página",
              noRows: "No se encontraron registros",
              info: "Mostrando {start} a {end} de {rows} registros",
          }
        } ) ;
    </script>
</body>
</html>
