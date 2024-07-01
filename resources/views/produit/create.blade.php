@extends('partials.navbar')
@section('content')
<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3><i>CREER UN PRODUIT</i></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Choisissez une image</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                            @error('image')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control" id="nom">
                            @error('nom')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" placeholder="Description" class="form-control"></textarea>
                            @error('description')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="categorie" class="form-label">Catégories</label>
                            <select name="categorie" id="categorie" class="form-control">
                                @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" id="prix" name="prix" placeholder="Prix" class="form-control">
                            @error('prix')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-warning px-4">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
