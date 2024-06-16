@extends('partials.navbar')
@section('content')
<h3>Créer un nouvel utilisateur</h3>
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom" class="m-2"><br>
    @error('nom') 
    <p>{{$message}}</p>
    @enderror
    <input type="" name="role" placeholder="Rôle" class="m-2"><br>
    @error('role') 
    <p>{{$message}}</p>
    @enderror
    <input type="email" name="email" placeholder="Email" class="m-2" ><br>
    @error('email') 
    <p>{{$message}}</p>
    @enderror
    <input type="number" name="telephone" placeholder="Téléphone" class="m-2"><br>
    @error('telephone') 
    <p>{{$message}}</p>
    @enderror
    <input type="text" name="adresse" placeholder="Adresse" class="m-2"><br>
    @error('adresse') 
    <p>{{$message}}</p>
    @enderror
    <button type="submit" >Créer</button>
</form>
@endsection