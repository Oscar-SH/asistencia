@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista.</title>
</head>
<body>

<div class="content-wrapper">
<br>
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
                @foreach ($teacher as $teach )
                    <tr class="table-info">
                        
                        <td>{{ $teach->namet }}</td>
                    </tr>
                @endforeach
            </table>

        <div>
        </div>

        </div>
    </div>
</div>
</body>
</html>
@endsection
