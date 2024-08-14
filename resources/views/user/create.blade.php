@extends('partials.navbar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Créer un  utilisateur</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control">
                            @error('nom')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Rôle</label>
                            <select name="role_id" id="role" class="form-control">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id}}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                            @error('email')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="number" name="telephone" placeholder="Téléphone" class="form-control">
                            @error('telephone')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control">
                            @error('adresse')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de Passe</label>
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                            @error('Mot de passe')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
