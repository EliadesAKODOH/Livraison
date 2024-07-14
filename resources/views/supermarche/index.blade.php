@extends('partials.navbar')
@section('content')

<div class="d-flex justify-content-end m-2">
<a href="{{ route('supermarche.create') }}" class="btn btn-primary"> 
  Ajouter un Supermarché
</a>

</div>
@if(session('succes'))

  <div class="alert alert-danger">{{session('succes')}}</div>

@endif


<table class="table table-bordered table-hover table-striped m-3">
    <thead>
      <tr>
        <td>Nom</td>
        <td>Email</td>
        <td>Adresse</td>
        <td>Image</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      @foreach($supermarches as $supermarche)
      <tr>
        <th>{{ $supermarche->nom_sup }}</th>
        <th>{{ $supermarche->email_sup }}</th>
        <th>{{ $supermarche->adresse_sup }}</th>
        <th>
         <img src="{{ asset('storage/' . $supermarche->image_sup) }}" alt="{{ $supermarche->nom_sup }}" style="width: 200px; height: 200px;">
        </th>
        <th style="width: 320px;">
          <a href="{{ route('supermarche.edit',['supermarche' => $supermarche->id]) }}" class="btn btn-primary">Modifier</a>
          <form action="{{ route('supermarche.destroy', ['supermarche' => $supermarche->id]) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          <a href="{{ route('supermarche.show', ['supermarche' => $supermarche->id]) }}" class="btn btn-success">Voir</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
