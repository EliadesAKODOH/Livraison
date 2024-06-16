@extends('partials.navbar')
@section('content')
<h3>Créer un produit</h3>
<form action="{{route('produit.store')}}" method="POST" class="vstack gap-2" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" placeholder="Image " class="m-2" required><br>
    @error('image') 
    <p>{{$message}}</p>
    @enderror
    <input type="text" name="nom" placeholder="Nom" class="m-2"><br>
    @error('nom') 
    <p>{{$message}}</p>
    @enderror
    <textarea name="description" id="" placeholder="Description" class="m-2"></textarea><br>
    @error('description') 
    <p>{{$message}}</p>
    @enderror
    <select name="categorie" id="" class="m-2">
        @foreach ($categories as $categorie)
        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
        @endforeach
    </select> <br>
    <input type="number" name="prix" placeholder="Prix" class="m-2"><br>
    @error('prix') 
    <p>{{$message}}</p>
    @enderror
    <button type="submit">Créer</button>
</form>
@endsection