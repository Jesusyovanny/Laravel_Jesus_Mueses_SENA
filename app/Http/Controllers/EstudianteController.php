<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Estudiante::all();
        // return $estudiante;
        return view('estudiantes.index', compact('student'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all(); con esto devuelvo toda la información
        $student = new Estudiante();
        $student->nombre = $request->input('nombre');
        $student->materia = $request->input('materia');
        $student->telefono = $request->input('telefono');
        $student->correo = $request->input('correo');

        $student->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
