<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1>Orphelinat</h1>
    </div>
    <div class="card-body">
      <form action="{{route('orphelinat.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nom">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Adresse" name="adresse">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Description" name="description">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Directeur" name="directeur">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Ville" name="ville">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Calendrier" name="calendrier">
        </div>
        <button style="margin-left: 250px" class="btn btn-primary" type="submit">Créer</button>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
