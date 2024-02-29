<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mail.css') }}">
</head>
<body>
    <main class="mail">
        <img
            src="{{ asset('img/logo-citogen.png') }}"
            alt="Logo de Citogen"
            class="logo"
            data-aos="zoom-in"
            data-aos-duration="700"
        >

        <h1>
            {{-- {{ $title }} --}}
            Bienvenido a Citogen
        </h1>

        <p>
            {{-- {{ $content }} --}}
            Gracias por registrarte en Citogen. Ahora podrás disfrutar de todos los beneficios que te ofrecemos.
        </p>
    </main>

    <div class="footer-mail">
        <p>
           Citogen 
        <p>
    </div>
</body>
</html>
