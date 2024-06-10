@extends('partials.navbar')
@section('content')
<h1>Créer un nouvel utilisateur</h1>
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom" >
    <input type="" name="role" placeholder="Rôle" >
    <input type="email" name="email" placeholder="Email" >
    <input type="number" name="telephone" placeholder="Téléphone" >
    <input type="text" name="adresse" placeholder="Adresse" >
    <input type="password" name="password" placeholder="Mot de passe" >
    <button type="submit" >Créer</button>
</form>
@endsection