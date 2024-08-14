@extends('partials.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Détail de {{$user->nom}}</h3>
                        <div class="mb-3">
                            <p class="m-2">Nom:{{$user->nom}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="m-2">Rôle:{{$user->role ? $user->role->name : "RAS"}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="m-2">Email:{{$user->email}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="m-2">Téléphone:{{$user->telephone}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="m-2">Adresse:{{$user->adresse}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="m-2">Mot de passe:{{$user->password}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
