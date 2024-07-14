@extends('partials.navbar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                <h3>Détail du supermarché {{$supermarche->nom_sup}}</h3>
                </div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                         <p class="form-control">Nom:{{$supermarche->nom_sup}}</p>
                        </div>
                        <div class="mb-3">
                         <p class="form-control">Email:{{$supermarche->email_sup}}</p>
                        </div>
                         <p class="form-control">Adresse:{{$supermarche->adresse_sup}}</p>
                        <div class="mb-3">
                         <img src="{{ asset('storage/' . $supermarche->image_sup) }}" style="width: 200px; height: 200px;">
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection