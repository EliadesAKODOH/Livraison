@extends('partials.navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Modifier un produit</h3>
                </div>
                <div class="card-body">
                  <form action="{{route('produit.update', ['produit'=>$produit->id])}} " method="POST" enctype="multipart/form-data >
                    @csrf
                    @method('put')
                     <div class="mb-3">
                            <input type="file" name="image" class="form-control" id="image" required>
                            @error('image')
                            <div class="text-danger" style="font-size: 14px;">{{ $message }}</div>
                            @enderror
                     </div>
                     <div class="mb-3">
                            <input type="text" name="nom" value="{{$produit->nom}}" class="form-control">
                            @error('nom')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                            <textarea name="description" class="form-control">{{$produit->description}}</textarea>
                            @error('description')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                            <select name="categorie_id" id="" class="form-control">
                                @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select> <br>
                            @error('categorie')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <input type="number" name="prix" value="{{$produit->prix}}" class="form-control"><br>
                    @error('prix')
                    <p>{{$message}}</p>
                    @enderror
                    <input type="number" name="en_stock" value="{{$produit->en_stock}}" class="form-control"><br>
                    @error('En stock')
                    <p>{{$message}}</p>
                    @enderror
                    <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">Modifier</button>
                        </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
