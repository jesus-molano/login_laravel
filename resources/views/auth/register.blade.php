<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Register</title>
</head>
<body>
  <h1>Registrarse</h1>
  <form action="/register" method="POST">
    @csrf
    @include('partials.messages')
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="username" placeholder="Nombre de usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <input type="password" name="confirm_password" placeholder="Confirmar Contraseña">
    <a href="/login">Iniciar sesión</a>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>