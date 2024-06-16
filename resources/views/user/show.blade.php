@extends('partials.navbar')
@section('content')
 <h3>Détail de l'utilisateur {{$user->nom}}</h3>
 <p class="m-2">Nom:{{$user->nom}}</p>
 <p class="m-2">Rôle:{{$user->role}}</p>
 <p class="m-2">Email:{{$user->email}}</p>
 <p class="m-2">Téléphone:{{$user->telephone}}</p>
 <p class="m-2">Adresse:{{$user->adresse}}</p>
@endsection