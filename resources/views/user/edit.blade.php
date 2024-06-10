@extends('partials.navbar')
@section('content')

<h1>Créer un nouvel utilisateur</h1>
<form action="{{route('user.update', $user->id)}}" method="POST">
    @csrf
    <input type="text" name="nom" value="{{$user->nom}}" >
    <input type="" name="role" value="{{$user->role}}" >
    <input type="email" name="email" value="{{$user->email}}" >
    <input type="number" name="telephone" value="{{$user->telephone}}" >
    <input type="text" name="adresse" value="{{$user->adresse}}" >
    <input type="password" name="password" placeholder="Nouveau mot de passe" >
    <button type="submit" >Enregistrer</button>
</form>
@endsection