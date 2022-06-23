<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h1>Login de Usuarios</h1>
    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="E-mail"> <br>
        <input type="password" name="password" placeholder="Contraseña"> <br>
        <button type="submit">Ingresar</button>
    </form>
</body>

</html>
