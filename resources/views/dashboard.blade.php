<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $user = session("user"); ?>
    <h1>Bienvenido</h1>
    <form action="/logout" method="post">
        @csrf
        <button>Cerrar sesion</button>
    </form>
</body>
</html>
