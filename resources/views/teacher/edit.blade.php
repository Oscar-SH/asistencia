@extends('layout.navbar')
@section('content')

<title>Docentes</title>

<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">        
        @csrf
        @method('PUT')
            <div>
            <label for="">Nombre del docente.</label>
            <input class="form-control" value="{{ $teacher->namet }}" type="text" name="namet">
            </div>
            <div>
            <label for="">Apellidos</label>
            <input class="form-control" value="{{ $teacher->lnamet }}" type="text" name="lnamet">
            </div>
            <div>
            <label for="">Horario</label>
            <input class="form-control" value="{{ $teacher->horario }}" type="text" name="horario">
            </div>
            <div>
            <label for="">Contacto</label>
            <input class="form-control" value="{{ $teacher->contacto }}" type="text" name="contacto">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <button class="btn btn-dark" href="{{ route('teacher.index') }}" >Volver</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>

@endsection