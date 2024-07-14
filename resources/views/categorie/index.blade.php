@extends('partials.navbar')
@section('content')

<div class="d-flex justify-content-end m-2">
<a href="{{ route('categorie.create') }}" class="btn btn-primary"> 
  Ajouter une catégorie
</a>

</div>
@if(session('succes'))

  <div class="alert alert-danger">{{session('succes')}}</div>

@endif


<table class="table table-bordered table-hover table-striped m-3">
    <thead>
      <tr>
        <td>Nom</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $categorie)
      <tr>
        <th>{{ $categorie->nom }}</th>
        <th style="width: 320px;">
          <a href="{{ route('categorie.edit',['categorie' => $categorie->id]) }}" class="btn btn-primary">Modifier</a>
          <form action="{{ route('categorie.destroy', ['categorie' => $categorie->id]) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          <a href="{{ route('categorie.show', ['categorie' => $categorie->id]) }}" class="btn btn-success">Voir</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
