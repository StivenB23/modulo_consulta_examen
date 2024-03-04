<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            background-color: #fff;
            font-family: "Raleway", sans-serif;
        }

        .mail {
            width: 100%;
            background-color: #ffffff;
            padding: 1rem;
        }

        a {
            color: #fff;
        }

        .contactEmail {

            color: #fff;
        }

        .mail h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .title {
            color: #008ecf;
        }

        .mail p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            text-align: justify;
            color: #2f2105;
        }

        .footer-mail {
            margin-top: 1rem;
            text-align: center;
            background-color: #008ecf;
            color: #fff;
            padding: 10px;
            font-weight: 100;
        }

        .link {
            display: flex;
            justify-content: center;
        }

        .link a {
            text-decoration: none;
            display: inline-block;
            background-color: #008ecf;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            font-size: 16;
            margin: 5px auto;
            text-align: center;
            border-radius: 5px;
            transition: 0.5s ease-in-out;
        }

        .link a:hover {
            background-color: #066089;
        }
    </style>
</head>

<body>
    <div class="mail">
        <img src="https://genetica.com.co/wp-content/uploads/2022/12/logo-citogen.png" alt="Logo de Citogen" class="logo"
            data-aos="zoom-in" data-aos-duration="700" />

        <h1 class="title">Examen y Resultados laboratorio</h1>
        <p>
            {{ $name }}, tu examen fue creado de forma exitosa esta al pendiente de nuestra plataforma para
            cuenado el/los especialista/s cargue/n los resultados de tus examenes.
        </p>
        <p>
            Puedes reviarlo haciendo clic en el siguiente enlace
        </p>
        <div class="link">
            <a href="http://127.0.0.1:8000/login">Iniciar Sesión</a>
        </div>
    </div>

    <div class="footer-mail">
        <p><b>Contactanos</b></p>
        <p style="color: #fff"><b>Correo:</b> <span class="contactEmail"
                style="color: #fff">mercadeo@genetica.com.co</span></p>
        <p><b>Teléfono:</b> (601) 8052971 y (601) 8052969 </p>
        <p style="color: #fff"><b>Sitio web:</b> <a style="color: #fff;font-weight:bold"
                href="https://genetica.com.co/contactanos/">Laboratorio de Genética</a> </p>
        <br><br>
        <p>
            <small><i><b>¡Estamos emocionados de tenerte con nosotros! Si tienes alguna
                        pregunta o necesitas ayuda, no dudes en contactarnos. ¡Que tengas
                        una experiencia increíble!</b></i></small>
        </p>
        <h4>Laboratorio de Genética</h4>
    </div>
</body>

</html>
