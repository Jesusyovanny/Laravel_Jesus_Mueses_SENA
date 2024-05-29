@extends('layouts.app')

@section('titulo', 'Listado de Estudiante')

@section('contenido')
<br>
<h3 class="text-center">Listado de Estudiantes</h3>
<br>
<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($student as $estudiantico)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$estudiantico->nombre}}</h5>
              <p class="card-text">{{$estudiantico->materia}}</p>
              <p class="card-text">{{$estudiantico->telefono}}</p>
              <p class="card-text">{{$esrudiantico->correo}}</p>
              <a href="#" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
