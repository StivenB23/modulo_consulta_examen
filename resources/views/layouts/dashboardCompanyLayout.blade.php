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
        @if($errors->has('token_error'))
            <div class="error_message" data-aos="fade-left" data-aos-duration="700">
                {{ $errors->first('token_error') }}
            </div>
        @endif

        <div class="sidebar">
            <img
                src="{{ asset('img/logo-citogen.png') }}"
                alt="Logo de Citogen"
                class="logo"
                data-aos="zoom-in"
                data-aos-duration="700"
            >

            <div class="items">
                <a href="{{ route('dashboardCompany.exams') }}" class="{{ Str::startsWith(request()->path(), 'dashboardCompany/exams') ? 'active item' : 'item' }}">
                    <i class="bi bi-activity"></i>
                    <p>
                        Examenes de mi empresa
                    </p>
                </a>
            </div>


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
                    {{ session('company')->email }} <span>({{ session('company')->name }})</span>
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
