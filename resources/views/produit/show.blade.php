@extends('partials.navbar')
@section('content')
 <h3>Détail du produit {{$produit->nom}}</h3>
 
 <img src="{{ asset('storage/'.$produit->image) }}" class="rounded float-end" alt="{{ $produit->nom }}" width="600" height="600">
 <p class="m-2">Nom:{{$produit->nom}}</p>
 <p class="m-2">Description:{{$produit->description}}</p>
 <p class="m-2">Categorie:{{$produit->categorie->nom}}</p>
 <p class="m-2">Prix:{{$produit->prix}}</p>
@endsection