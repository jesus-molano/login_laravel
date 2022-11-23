<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles.css">
  <title>Editar alumno</title>
</head>
<body>
  <a href="/">Ver listado de alumnos</a>
  <h2>Editar alumno</h2>
  <div>
    <form action="/alumnos/editar/{{ $alumno->id }}" method="POST">
      @csrf
      {{ method_field('PUT') }}
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{ $alumno->nombre }}">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="{{ $alumno->apellido }}">
      <label for="edad">Edad</label>
      <input type="text" id="edad" name="edad" placeholder="Edad" value="{{ $alumno->edad }}">
      <label for="direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" placeholder="Direccion" value="{{ $alumno->direccion }}">
      <button type="submit" >Editar</button>
    </form>
  </div>
</body>
</html>