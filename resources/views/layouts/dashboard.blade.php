@extends('layout.layout')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=" {{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <title>Asistencia</title>
</head>
@section('content')
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm">
            <center><b><i><h1>Bienvenido a programas S.H</h1></i></b></center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
          <div class="col-sm-4">
            <!--card -->
            <div class="card-center" style="width: 20rem;">
              <img src="dist/img/listas.png" class="card-img-top" width="100" height="200">
              <div class="card-body">
                <h5 class="card-title">LISTA</h5>
                <p class="card-text">Ingresar a modulo <b>LISTA</b></p>
                <a href="{{ route('asisten.index') }}" class="btn btn-primary">IR</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-sm-4">
            <!--card -->
            <div class="card-center" style="width: 20rem;">
              <img src="dist/img/estudiantes.jpg" class="card-img-top" width="100" height="200">
              <div class="card-body">
                <h5 class="card-title">ESTUDIANTES</h5>
                <p class="card-text">Ingresar a modulo <b>ESTUDIANTES</b></p>
                <a href="{{ route('student.index') }}" class="btn btn-primary">IR</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-sm-4">
            <!--card -->
            <div class="card-center" style="width: 20rem;">
              <img src="dist/img/materias.png" class="card-img-top" width="100" height="200">
              <div class="card-body">
                <h5 class="card-title">MATERIAS</h5>
                <p class="card-text">Ingresar a modulo <b>MATERIAS</b></p>
                <a href="{{ route('subject.index') }}" class="btn btn-primary">IR</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <!--card -->
            <div class="card-center" style="width: 20rem;">
              <img src="dist/img/docentes.jpg" class="card-img-top" width="100" height="200">
              <div class="card-body">
                <h5 class="card-title">DOCENTES</h5>
                <p class="card-text">Ingresar a modulo <b>DOCENTES</b></p>
                <a href="{{ route('teacher.index') }}" class="btn btn-primary">IR</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-sm">
            <!--card -->
            <div class="card-center" style="width: 20rem;">
              <img src="dist/img/datos.png" class="card-img-top" width="100" height="200">
              <div class="card-body">
                <h5 class="card-title">DATOS</h5>
                <p class="card-text">Ingresar a modulo <b>DATOS</b></p>
                <a href="{{ route('gropu.index') }}" class="btn btn-primary">IR</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-sm-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
@endsection
</html>