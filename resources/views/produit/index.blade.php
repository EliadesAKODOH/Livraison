@extends('partials.navbar')
@section('content')

    <!-- Layout wrapper -->

    <div class="d-flex justify-content-end m-2">
<a href="{{ route('produit.create') }}" class="btn btn-primary"> 
  Ajouter Produit
</a>
</div>

@if(session('succes'))

  <div class="alert alert-success">{{session('succes')}}</div>

@endif


                <table class="table table-bordered table-hover table-striped m-3">
                  <thead>
                    <tr>
                      <td>Image</td>
                      <td>Nom</td>
                      <td>Description</td>
                      <td>Catégorie</td>
                      <td>Prix</td>
                      <td>Action</td>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($produits as $produit)
                    <tr>
                    <th>
                     <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->nom }}" style="width: 200px; height: 200px;">
                    </th>
                      <th> {{$produit->nom}} </th>
                      <th> {{$produit->description}} </th>
                      <th>
                        
                       {{$produit->categorie ? $produit->categorie->nom : "RAS"}}
                       
                      </th>
                      <th> {{$produit->prix}} </th>
                      <th style="width: 320px;">
          <a href="{{ route('produit.edit',['produit' => $produit->id]) }}" class="btn btn-primary">Modifier</a>
          <form action="{{ route('produit.destroy',['produit' => $produit->id]) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-success">Voir</a>
        </th>
                    </tr>
                    @endforeach
                  </tbody> 
                </table>
    @endsection
