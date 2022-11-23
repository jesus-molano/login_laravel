<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Inicio</title>
</head>
<body>
    @auth
    <h1>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}</h1>
    <a href="/logout">
      Logout
    </a>
    @endauth
    @guest
    <p>Invitado, para ver más contenido <a href="/login">inicia sesion</a></p>
    @endguest
</body>
</html>