<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{

    public function getAll()
    {
        return DB::table('alumno')->get();
    }


    public function getById($id)
    {
        return  DB::table('alumno')->where('id', $id)->first();
    }


    public function create(Request $request)
    {
        $params = $request->validate([
            'nombre' => 'required|max:50',
            'telefono' => 'required|digits:9|numeric',
            'edad' => 'required|numeric',
            'password' => 'required|min:8',
            'email' => 'required|email|ends_with:.com',
            'sexo' => 'required|in:Hombre,Mujer',
        ]);

        DB::table('alumno')->insertGetId([
            'nombre' => $params['nombre'],
            'telefono' => $params['telefono'],
            'edad' => $params['edad'],
            'password' => $request->input('password'),
            'email' => $params['email'],
            'sexo' => $params['sexo'],
        ]);

        return response()->json('Alumno completado');
    }


    public function delete($id)
    {
        $deleted = DB::table('alumno')->where('id', $id)->delete();
        if ($deleted) {
            return 'borrado correctamente';
        } else {
            return response()->json('error al intentar borrar al alumno correctamente');
        }
    }


    public function update(Request $request, $id)
    {

        $params = $request->validate([
            'nombre' => 'nullable|max:50',
            'telefono' => 'nullable|digits:9|numeric',
            'edad' => 'nullable|numeric',
            'password' => 'nullable|min:8',
            'email' => 'nullable|email|ends_with:.com',
            'sexo' => 'nullable|in:Hombre,Mujer',
        ]);


        $alumno = DB::table('alumno')->where('id', $id)->first();

        if (!$alumno) {
            return response()->json('El alumno indicado no existe');
        }

        DB::table('alumno')
            ->where('id', $id)
            ->update([
                'nombre' => $params['nombre'] ?? $alumno->nombre,
                'telefono' => $params['telefono'] ?? $alumno->telefono,
                'edad' => $params['edad'] ?? $alumno->edad,
                'password' => $request->input('password', $alumno->password),
                'email' => $params['email'] ?? $alumno->email,
                'sexo' => $params['sexo'] ?? $alumno->sexo,
            ]);

        return response()->json('Alumno actualizado correctamente');
    }
}
