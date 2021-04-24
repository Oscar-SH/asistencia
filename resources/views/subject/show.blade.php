@extends('layout.navbar')
@section('content')
<title>Materias</title>


<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="img-circle elevation-2">
            <div class="card-body">
                <h5 class="card-title"><b> Nombre: </b>{{ ($subject->nmateria) }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ ($subject->clave) }}</li>
            </ul>
            <div class="card-body">
                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
                    <a class="btn btn-dark btn-sm" href="{{ route('subject.index') }}" class="card-link">Volver</a>
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