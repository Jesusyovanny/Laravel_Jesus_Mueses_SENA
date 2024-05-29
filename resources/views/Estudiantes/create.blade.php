@extends('layouts.app')

@section('titulo','añadir estudiante')

@section('contenido')
    <br>
    <h3>Añadir Estudiante</h3>
    <form action="/estudiante" method="post">
        @csrf
        <div class="mb-3">
          <label for="nombrecurso" class="form-label">Nombre del Estudiante:</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="regional" class="form-label">Regional:</label>
            <input type="text" class="form-control" id="regional" name="regional">
        </div>
        <div class="mb-3">
            <label for="materia" class="form-label">Materia:</label>
            <input type="text" class="form-control" id="materia" name="materia">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electronico:</label>
            <input type="text" class="form-control" id="correo" name="correo">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection
