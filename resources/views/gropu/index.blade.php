@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos.</title>
</head>
<body>

<div class="content-wrapper">
<br>
<div class="col">
    <a class="btn btn-dark" href="{{ route('gropu.create') }}">Agregar Nuevo</a>
    <center><h4><b>DATOS</b></h4></center>
</div>
    <div class="row">
        <div class="col-2"></div>
        <div>
            <table class="table table-dark table-bordered border-light">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">SEMESTRE</th>
                <th scope="col">GRUPO</th>
                <th scope="col">CAPACIDAD</th>
                </tr>
            @foreach ($gropu as $gro)

            <tr class="table-info">
                <td>{{ $gro->id }}</td>
                <td>{{ $gro->semestre }}</td>
                <td>{{ $gro->nameg }}</td>
                <td>{{ $gro->capacidad }}</td>
                <td>
                    <form action="{{ route('gropu.destroy', $gro->id) }}" method="POST">
                        <a class="btn btn-dark btn-sm" href="{{ route('gropu.show', $gro->id) }}">VER</a>
                        <a class="btn btn-dark btn-sm" href="{{ route('gropu.edit', $gro->id) }}">EDITAR</a>
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-dark btn-sm" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>

            @endforeach
            </table>

        <div>
            {!! $gropu->links() !!}
        </div>

        </div>
    </div>
</div>
</body>
</html>
@endsection