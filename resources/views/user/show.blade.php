@extends('partials.navbar')
@section('content')
 <h1>Détail de l'utilisateur {{$user->nom}}</h1>
 <p>Nom:{{$user->nom}}</p>
 <p>Rôle:{{$user->role}}</p>
 <p>Email:{{$user->email}}</p>
 <p>Téléphone:{{$user->telephone}}</p>
 <p>Adresse:{{$user->adresse}}</p>
@endsection