@extends('partials.navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                <h3>Détail du produit</h3>
                </div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                         <img src="{{ asset('storage/'.$produit->image) }}" class="rounded float-end" alt="{{ $produit->nom }}" style="width: 200px; height: 200px;">
                        </div>
                        <div class="mb-3">
                         <p class="m-2">Nom:{{$produit->nom}}</p>
                        </div>
                        <div class="mb-3">
                         <p class="m-2">Description:{{$produit->description}}</p>
                        </div>
                        <div class="mb-3">
                         <p class="m-2">Categorie:{{$produit->categorie->nom}}</p>
                        </div>
                        <div class="mb-3">
                         <p class="m-2">Prix:{{$produit->prix}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection