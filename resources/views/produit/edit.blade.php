@extends('partials.navbar')
@section('content')

<h3>Modifier un produit</h3>
<form action="{{route('produit.update', ['produit'=>$produit->id])}} " method="POST" enctype="multipart/form-data >
    @csrf
    @method('put')
    <input type="file" name="image" value="{{$produit->nom}}" class="m-2" required><br>
    @error('image')
    <p>{{message}}</p>
    @enderror
    <input type="text" name="nom" value="{{$produit->nom}}" class="m-2"><br>
    @error('nom') 
    <p>{{$message}}</p>
    @enderror
    <textarea name="description" class="m-2">{{$produit->description}}</textarea> <br>
    @error('description') 
    <p>{{$message}}</p>
    @enderror
    <select name="categorie" id="" class="m-2">
        @foreach ($categories as $categorie)
        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
        @endforeach
    </select> <br>
    @error('categorie') 
    <p>{{$message}}</p>
    @enderror
    <input type="number" name="prix" value="{{$produit->prix}}" class="m-2"><br>
    @error('prix') 
    <p>{{$message}}</p>
    @enderror
    <button type="submit">Enregistrer</button>
</form>
@endsection