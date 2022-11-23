<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles.css">
  <title>Listado alumnos</title>
</head>

<body>
<a href="/logout" class="logout">Cerrar sesión</a>

  <h2>Listado de alumnos</h2>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Direccion</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($alumnos as $alumno)
      <tr>
        <td>{{ $alumno->nombre }}</td>
        <td>{{ $alumno->apellido }}</td>
        <td>{{ $alumno->edad }}</td>
        <td>{{ $alumno->direccion }}</td>
        <td>
          <a href="/alumnos/ver/{{ $alumno->id }}">Ver</a>
          <a href="/alumnos/editar/{{ $alumno->id }}">Editar</a>
          <a href="/alumnos/eliminar/{{ $alumno->id }}" onclick="return eliminarAlumno('Eliminar Alumno')">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/alumnos/crear">Nuevo alumno</a>
  <script>
    function eliminarAlumno(value) {
      action = confirm(value) ?
        true :
        event.preventDefault();
    }
  </script>
</body>

</html>