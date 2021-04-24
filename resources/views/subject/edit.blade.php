@extends('layout.navbar')
@section('content')

<title>Materias</title>

<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('subject.update', $subject->id) }}" method="POST">        
        @csrf
        @method('PUT')
            <div>
            <label for="">Materia</label>
            <input class="form-control" value="{{ $subject->nmateria }}" type="text" name="nmateria">
            </div>
            <div>
            <label for="">Clave</label>
            <input class="form-control" value="{{ $subject->clave }}" type="text" name="clave">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <button class="btn btn-dark" href="{{ route('subject.index') }}" >Volver</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>

@endsection