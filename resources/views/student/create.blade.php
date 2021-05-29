@extends('layout.navbar')
@section('content')

<title>Estudiantes</title>

    <div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('student.store') }}" method="POST">        
        @csrf
            <div>
            <label for="">Nombre</label>
            <input class="form-control" placeholder="Nombre" type="text" name="name">
            </div>
            <div>
            <label for="">Apellidos</label>
            <input class="form-control" placeholder="Apellidos" type="text" name="lname">
            </div>
            <div>
            <label for="">Numero de control</label>
            <input class="form-control" placeholder="Numero de control" type="text" name="ncontrol">
            </div>
            <div>
            <label for="">Estado</label>
            <input class="form-control" placeholder="Estado" type="text" name="status">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <a class="btn btn-dark" href="{{ route('student.index') }}">Volver</a>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>
@endsection