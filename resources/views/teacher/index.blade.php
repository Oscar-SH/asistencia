@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes.</title>
</head>
<body>

<div class="content-wrapper">
<br>
<div class="col">
    <a class="btn btn-dark" href="{{ route('teacher.create') }}">Agregar Nuevo</a>
    <center><h4><b>DOCENTES</b></h4></center>
</div>
    <div class="row">
        <div class="col-2"></div>
        <div>
            <table class="table table-dark table-bordered border-light">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE DEL DOCENTE</th>
                <th scope="col">APELLIDOS DEL DOCENTE</th>
                <th scope="col">HORARIO</th>
                <th scope="col">CONTACTO</th>
                </tr>
            @foreach ($teacher as $tea)

            <tr class="table-info">
                <td>{{ $tea->id }}</td>
                <td>{{ $tea->namet }}</td>
                <td>{{ $tea->lnamet }}</td>
                <td>{{ $tea->horario }}</td>
                <td>{{ $tea->contacto }}</td>
                <td>
                    <form action="{{ route('teacher.destroy', $tea->id) }}" method="POST">
                        <a class="btn btn-dark btn-sm" href="{{ route('teacher.show', $tea->id) }}">VER</a>
                        <a class="btn btn-dark btn-sm" href="{{ route('teacher.edit', $tea->id) }}">EDITAR</a>
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-dark btn-sm" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>

            @endforeach
            </table>

        <div>
            {!! $teacher->links() !!}
        </div>

        </div>
    </div>
</div>
</body>
</html>
@endsection