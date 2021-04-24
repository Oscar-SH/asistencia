@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes.</title>
</head>
<body>

<div class="content-wrapper">
<br>
<div class="col">
    <a class="btn btn-dark" href="{{ route('student.create') }}">Agregar Nuevo</a>
    <center><h4><b>ESTUDIANTES</b></h4></center>
</div>
    <div class="row">
        <div class="col-2"></div>
        <div>
            <table class="table table-dark table-bordered border-light">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">NUMERO DE CONTROL</th>
                <th scope="col">ESTADO<th>
                </tr>
            @foreach ($student as $stu)

            <tr class="table-info">
                <td>{{ $stu->id }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->lname }}</td>
                <td>{{ $stu ->ncontrol }}</td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Asistio</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">No Asistio</label>
                </div>
                </td>
                <td>
                    <form action="{{ route('student.destroy', $stu->id) }}" method="POST">
                        <a class="btn btn-dark btn-sm" href="{{ route('student.show', $stu->id) }}">VER</a>
                        <a class="btn btn-dark btn-sm" href="{{ route('student.edit', $stu->id) }}">EDITAR</a>
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-dark btn-sm" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>

            @endforeach
            </table>

        <div>
            {!! $student->links() !!}
        </div>

        </div>
    </div>
</div>
</body>
</html>
@endsection