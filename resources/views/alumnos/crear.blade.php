<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles.css">
  <title>Crear alumno</title>
</head>
<body>
  <a href="/">Ver listado de alumnos</a>
  <h2>Nuevo alumno</h2>
  <div>
    <form action="/alumnos/crear" method="POST">
      @csrf
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" placeholder="Apellido">
      <label for="edad">Edad</label>
      <input type="text" id="edad" name="edad" placeholder="Edad">
      <label for="direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" placeholder="Direccion">
      <button type="submit" >Crear</button>
    </form>
  </div>
</body>
</html>