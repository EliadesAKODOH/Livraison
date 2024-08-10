<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    protected $panierRepository;

    public function index()
    {
        return view('panier.index');
    }

    public function __construct (PanierInterfaceRepository $panierRepository) {
    	$this->panierRepository = $panierRepository;
    }

    # Affichage du panier
    public function show () {
    	return view("panier.show"); // resources\views\panier\show.blade.php
    }

    # Ajout d'un produit au panier
    public function add (Produit $produit, Request $request) {

    	// Validation de la requête
    	$this->validate($request, [
    		"quantite_produit" => "numeric|min:1"
    	]);

    	// Ajout/Mise à jour du produit au panier avec sa quantité
    	$this->panierRepository->add($produit, $request->quantite_produit);

    	// Redirection vers le panier avec un message
    	return redirect()->route("panier.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove (Product $product) {

    	// Suppression du produit du panier par son identifiant
    	$this->panierRepository->remove($produit);

    	// Redirection vers le panier
    	return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty () {

    	// Suppression des informations du panier en session
    	$this->panierRepository->empty();

    	// Redirection vers le panier
    	return back()->withMessage("Panier vidé");

    }

}
