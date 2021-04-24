@extends('layout.navbar')
@section('content')

<title>Docentes</title>

    <div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('teacher.store') }}" method="POST">        
        @csrf
            <div>
            <label for="">Nombre</label>
            <input class="form-control" placeholder="Nombre" type="text" name="namet">
            </div>
            <div>
            <label for="">Apellidos</label>
            <input class="form-control" placeholder="Apellidos" type="text" name="lnamet">
            </div>
            <div>
            <label for="">Horario</label>
            <input class="form-control" placeholder="Horario" type="text" name="horario">
            </div>
            <div>
            <label for="">Contacto</label>
            <input class="form-control" placeholder="Contacto" type="text" name="contacto">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <a class="btn btn-dark" href="{{ route('teacher.index') }}">Volver</a>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>
@endsection