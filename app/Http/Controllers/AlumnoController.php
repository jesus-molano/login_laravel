<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;


class AlumnoController extends Controller
{
    protected  $alumnos;
    public function __construct(Alumno $alumnos){
        $this->alumnos =  $alumnos;
    }

    public function index()
    {
        // Obtener el listado de alumnos y retornarlos en la vista
        $alumnos = $this->alumnos->obtenerAlumnos();
        return view('alumnos.lista', ['alumnos' =>  $alumnos]);
    }

    public function create()
    {
        // Redirecciona a la vista para crear alumnos
        return view('alumnos.crear');
    }

    public function store(Request $request)
    {
        // Almacena el alumno recibido en la request
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }


    public function show($id)
    {
        // Obtener alumno por id
        $alumno = $this->alumnos->obtenerAlumnoPorId($id);
        return view('alumnos.ver', ['alumno' => $alumno]);
    }

    public function edit($id)
    {
        //Retorna el alumno pasado por id para editarlo
        $alumno = $this->alumnos->obtenerAlumnoPorId($id);
        return view('alumnos.editar', ['alumno' => $alumno]);
    }

    public function update(Request $request, $id)
    {
        // Actualiza el alumno con los campos de la request
        $alumno = Alumno::find($id);
        $alumno->fill($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function destroy($id)
    {
        // Elimina el alumno pasado por id
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->action([AlumnoController::class, 'index']);
    }
}
