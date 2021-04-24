@extends('layout.navbar')
@section('content')
<title>Docentes</title>


<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="img-circle elevation-2">
            <div class="card-body">
                <h5 class="card-title"><b> Nombre: </b>{{ ($teacher->namet) }} {{ ($teacher->lnamet) }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ ($teacher->horario) }}</li>
                <li class="list-group-item">{{ ($teacher->contacto) }}</li>
            </ul>
            <div class="card-body">
                <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                    <a class="btn btn-dark btn-sm" href="{{ route('teacher.index') }}" class="card-link">Volver</a>
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-dark btn-sm" type="submit" value="Eliminar">
                </form>
            </div>
        </div>       
    </div>
    <div class="col"></div>
</div>

@endsection