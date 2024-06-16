<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProduitController extends Controller
{
    /**
     * Afficher une liste de la ressource.
     */
    public function index()
    {
        $produits = Produit::with('categorie')->get();
        return view('produit.index', compact('produits'));
    }

    public function clientSide()
    {
        $alimentaires = Produit::whereDoesntHave('categorie', function (Builder $query) {
            $query->whereIn('id', [2, 3]);
        })->get();

        $laitiers = Produit::whereDoesntHave('categorie', function (Builder $query) {
            $query->whereIn('id', [1, 3]);
        })->get();

        $surgeles = Produit::whereDoesntHave('categorie', function (Builder $query) {
            $query->whereIn('id', [1, 2]);
        })->get();

        return view('client.index', compact('alimentaires', 'laitiers', 'surgeles'));
    }

    /**
     * Montrer le formulaire pour créer une nouvelle ressource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produit.create', compact('categories'));
    }

    /**
     * Stocker une ressource nouvellement créée dans le stockage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image'],
            'nom' => ['required'],
            'description' => ['required'],
            'prix' => ['required', 'numeric'],
            'categorie' => ['required', 'exists:categories,id']
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('images');
        // dd( $imagePath);

        Produit::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie,
            'image' => $imagePath
        ]);

        return redirect()->route('produit.index')->with('succes', 'Produit ajouté avec succès');
    }

    /**
     * Afficher la ressource spécifiée.
     */
    public function show(string $id)
    {
        $produit = Produit::findOrFail($id);
       // dd($produit->image);
        return view('produit.show', compact('produit'));
    }

    /**
     * Montrer le formulaire pour éditer la ressource spécifiée.
     */
    public function edit(Produit $produit)
    {
        $categories = Categorie::all();
        return view('produit.edit', compact('produit', 'categories'));
    }

    /**
     * Mettre à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request, Produit $produit)
     { 
        $request->validate([
        'image' => ['required', 'image'],
        'nom' => ['required'],
        'description' => ['required'],
        'prix' => ['required', 'numeric'],
        'categorie' => ['required', 'exists:categories,id']
    ]);

    $image = $request->file('image');
    $imagePath = $image->store('images','public');

     Produit::create([
        'nom' => $request->nom,
        'description' => $request->description,
        'prix' => $request->prix,
        'categorie_id' => $request->categorie,
        'image' => $imagePath
    ]);


    // {
    //     $request->validate([
    //         'image' => ['image'],
    //         'nom' => ['required'],
    //         'description' => ['required'],
    //         'prix' => ['required', 'numeric'],
    //         'categorie_id' => ['required', 'exists:categories,id']
    //     ]);
 
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imagePath = $image->store('images', 'public');
    //         $produit->image = $imagePath;
    //     }

    //     $produit->nom = $request->nom;
    //     $produit->description = $request->description;
    //     $produit->prix = $request->prix;
    //     $produit->categorie_id = $request->categorie_id;

    //     $produit->save();

        return redirect()->route('produit.index')->with('succes', 'Produit modifié avec succès');
    }

    /**
     * Supprimer la ressource spécifiée du stockage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produit.index')->with('succes', 'Produit supprimé avec succès');
    }
}
