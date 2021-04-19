@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias.</title>
</head>
<body>

<div class="content-wrapper">
<br>
<div class="col">
    <a class="btn btn-dark" href="{{ route('subject.create') }}">Agregar Nuevo</a>
    <center><h4><b>MATERIAS</b></h4></center>
</div>
    <div class="row">
        <div class="col-2"></div>
        <div>
            <table class="table table-dark table-bordered border-light">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE DE LA MATERIA</th>
                <th scope="col">CLAVE DE LA MATERIA</th>
                </tr>
            @foreach ($subject as $sub)

            <tr class="table-info">
                <td>{{ $sub->id }}</td>
                <td>{{ $sub->nmateria }}</td>
                <td>{{ $sub->clave }}</td>
                <td>
                    <form action="{{ route('subject.destroy', $sub->id) }}" method="POST">
                        <a class="btn btn-dark btn-sm" href="{{ route('subject.show', $sub->id) }}">VER</a>
                        <a class="btn btn-dark btn-sm" href="{{ route('subject.edit', $sub->id) }}">EDITAR</a>
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-dark btn-sm" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>

            @endforeach
            </table>

        <div>
            {!! $subject->links() !!}
        </div>

        </div>
    </div>
</div>
</body>
</html>
@endsection