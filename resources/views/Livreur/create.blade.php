@extends('partials.navbar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3><i>Créer un nouveau livreur</i></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('livreur.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control" id="nom">
                            @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" id="email">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="telephone">Téléphone</label>
                            <input type="number" name="telephone" placeholder="Téléphone" class="form-control" id="telephone">
                            @error('telephone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control" id="adresse">
                            @error('adresse')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
