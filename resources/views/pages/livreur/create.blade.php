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
      <h1>Faire un don</h1>
    </div>
    <div class="card-body">
      <form action="{{route('don.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <select name="orphelinat" id="" class="form-control">
            <option value="">Selectionnez un orphelinat</option>
            @foreach ($orphelinats as $orphelinat)                
            <option value="{{ $orphelinat->id }}">{{$orphelinat->nom}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group mb-3">
          <select name="donateur" id="" class="form-control">
            <option value="">Selectionnez le donateur</option>
            @foreach ($donateurs as $donateur)                
            <option value="{{ $donateur->id }}">{{$donateur->nom}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Montant" name="montant">
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Date" name="date">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Commentaire" name="commentaire">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Méthode de paiement" name="methode">
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
