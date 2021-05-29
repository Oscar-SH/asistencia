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
            <a class="btn btn-dark" href="#">Exportar a PDF</a>
            <a class="btn btn-dark" href="#">Exportar a XLS</a>
            </div>
            <div class="card">


                @foreach($asisten as $asis )
                    {{ $asis->id_teachers.namet }}
                    {{ $asis->created_at }}
                @endforeach

            </div>
        </div>
    </div>
</body>

</html>
@endsection