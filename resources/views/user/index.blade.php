@extends('partials.navbar')
@section('content')

<a href="{{ route('user.create') }}"> 
    <button type="button" class="btn btn-primary m-3 ms-auto d-block">Ajouter utilisateur</button>
</a>

<table class="table table-bordered table-hover table-striped mt-3">
    <thead>
      <tr>
        <td>Nom</td>
        <td>Rôle</td>
        <td>Email</td>
        <td>Téléphone</td>
        <td>Adresse</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th>{{ $user->nom }}</th>
        <th>
          @foreach($user->roles as $role)
           {{ $role->name }}
          @endforeach
        </th>
        <th>{{ $user->email }}</th>
        <th>{{ $user->telephone }}</th>
        <th>{{ $user->adresse }}</th>
        <th style="width: 320px;">
          <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
          <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          <a href="{{ route('user.show', $user->id) }}" class="btn btn-success">Voir</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
