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
    <h1>Bienvenido {{$user->nombre}}</h1>
    <form action="registerUserSpecialist" method="post">
        <input type="text" name="name" placeholder="name" id="">
        <input type="text" name="lastname" placeholder="lastname" id="">
        <input type="text" name="type_document" placeholder="type_document" id="">
        <input type="text" name="document" placeholder="document" id="">
        <input type="text" name="age" placeholder="age" id="">
        <input type="text" name="sex" placeholder="sex" id="">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="role" placeholder="role" id="">
        @csrf
        <button>Guardar</button>
    </form>
    <form action="{{ route('updateUser', "6") }}" method="post">
        @method("put")
        {{-- <input type="text" name="name" placeholder="name" id=""> --}}
        <input type="text" name="lastname" placeholder="lastname" id="">
        {{-- <input type="text" name="type_document" placeholder="type_document" id="">
        <input type="text" name="document" placeholder="document" id="">
        <input type="text" name="age" placeholder="age" id="">
        <input type="text" name="sex" placeholder="sex" id="">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="role" placeholder="role" id=""> --}}
        @csrf
        <button>Actualizar</button>
    </form>
    <form action="/logout" method="post">
        @csrf
        <button>Cerrar sesion</button>
    </form>
</body>
</html>