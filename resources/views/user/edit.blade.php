@extends('partials.navbar')
@section('content')

<h3>Modifier un utilisateur</h3>
<form action="{{route('user.update', ['user' => $user->id])}}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nom" value="{{$user->nom}}" class="m-2"><br>
    @error('nom') 
    <p>{{$message}}</p>
    @enderror
    <input type="" name="role" value="{{$user->role}}" class="m-2"><br>
    @error('role') 
    <p>{{$message}}</p>
    @enderror
    <input type="email" name="email" value="{{$user->email}}" class="m-2"><br>
    @error('email') 
    <p>{{$message}}</p>
    @enderror
    <input type="number" name="telephone" value="{{$user->telephone}}" class="m-2"><br>
    @error('telephone') 
    <p>{{$message}}</p>
    @enderror
    <input type="text" name="adresse" value="{{$user->adresse}}" class="m-2"><br>
    @error('adresse') 
    <p>{{$message}}</p>
    @enderror
    <button type="submit" >Enregistrer</button>
</form>
@endsection