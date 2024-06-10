@extends('partials.navbar')
@section('content')

    <!-- Layout wrapper -->

    <a href=""> <button class="btn btn-primary mt-3"> Ajouter un produit </button> </a>
                <table class="table table-bordered table-hover table-striped mt-3">
                  <thead>
                    <tr>
                      <td>N°</td>
                      <td>Nom</td>
                      <td>Détail</td>
                      <td>Catégorie</td>
                      <td>Prix</td>
                      <td>Action</td>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($produits as $produit)
                    <tr>
                      <th> {{$produit->id}} </th>
                      <th> {{$produit->nom}} </th>
                      <th> {{$produit->detail}} </th>
                      <th> {{$produit->categorie}} </th>
                      <th> {{$produit->prix}} </th>
                      <th class="" style="width: 320px;">
                      <a href="" class="btn btn-primary">Modifier</a>
                      <a href="" class="btn btn-danger">Supprimer</a>
                      <a href="" class="btn btn-success">Voir</a>
                      </th>
                    </tr>
                    @endforeach
                  </tbody> 
                </table>
    @endsection
