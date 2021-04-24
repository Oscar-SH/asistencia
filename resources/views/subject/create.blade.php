@extends('layout.navbar')
@section('content')

<title>Materias</title>

    <div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('subject.store') }}" method="POST">        
        @csrf
            <div>
            <label for="">Materia</label>
            <input class="form-control" placeholder="Materia" type="text" name="nmateria">
            </div>
            <div>
            <label for="">Clave</label>
            <input class="form-control" placeholder="Clave" type="text" name="clave">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <a class="btn btn-dark" href="{{ route('subject.index') }}">Volver</a>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>
@endsection