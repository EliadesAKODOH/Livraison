@extends('partials.navbar')
@section('content')
 <h3>Détail du Livreur {{$livreur->nom}}</h3>
 <p class="m-2">Nom:{{$livreur->nom}}</p>
 <p class="m-2">Email:{{$livreur->email}}</p>
 <p class="m-2">Téléphone:{{$livreur->telephone}}</p>
 <p class="m-2">Adresse:{{$livreur->adresse}}</p>
@endsection