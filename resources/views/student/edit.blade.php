@extends('layout.navbar')
@section('content')

<title>Estudiantes</title>

<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('student.update', $student->id) }}" method="POST">        
        @csrf
        @method('PUT')
            <div>
            <label for="">Nombre</label>
            <input class="form-control" value="{{ $student->name }}" type="text" name="name">
            </div>
            <div>
            <label for="">Apellidos</label>
            <input class="form-control" value="{{ $student->lname }}" type="text" name="lname">
            </div>
            <div>
            <label for="">Numero de control</label>
            <input class="form-control" value="{{ $student->ncontrol }}" type="text" name="ncontrol">
            </div>
            <div>
            <label for="">Estado</label>
            <input class="form-control" value="{{ $student->status }}" type="text" name="status">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <button class="btn btn-dark" href="{{ route('student.index') }}" >Volver</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>

@endsection