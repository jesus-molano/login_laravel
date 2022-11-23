<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Iniciar sesión</title>
</head>
<body>
  <h1>Inicio de sesión</h1>
  <form action="/login" method="POST">
    @csrf
    @include('partials.messages')
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Contraseña">
    <a href="/register">Crear cuenta</a>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>