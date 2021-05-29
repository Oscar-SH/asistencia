@extends('layout.navbar')
@section('content')

<title>Datos</title>

    <div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('gropu.store') }}" method="POST">        
        @csrf
            <div>
            <label for="">Semestre</label>
            <input class="form-control" placeholder="Semestre" type="text" name="semestre">
            </div>
            <div>
            <label for="">Grupo</label>
            <input class="form-control" placeholder="Grupo" type="text" name="nameg">
            </div>
            <div>
            <label for="">Capacidad</label>
            <input class="form-control" placeholder="Capacidad" type="text" name="capacidad">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <a class="btn btn-dark" href="{{ route('gropu.index') }}">Volver</a>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>
@endsection