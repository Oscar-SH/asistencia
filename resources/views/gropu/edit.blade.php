@extends('layout.navbar')
@section('content')

<title>Datos</title>

<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('gropu.update', $gropu->id) }}" method="POST">        
        @csrf
        @method('PUT')
            <div>
            <label for="">Semestre</label>
            <input class="form-control" value="{{ $gropu->semestre }}" type="text" name="semestre">
            </div>
            <div>
            <label for="">Grupo</label>
            <input class="form-control" value="{{ $gropu->nameg }}" type="text" name="nameg">
            </div>
            <div>
            <label for="">Capacidad</label>
            <input class="form-control" value="{{ $gropu->capacidad }}" type="text" name="capacidad">
            </div>
            <br>
            <div>
            <input class="btn btn-dark" type="reset" value="Limpiar">
            <input class="btn btn-dark" type="submit" value="Guardar">
            <button class="btn btn-dark" href="{{ route('gropu.index') }}" >Volver</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>

@endsection