<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
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
    public function store(Request $request, Produit $produit)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nom' => ['required'],
            'description' => ['required'],
            'prix' => ['required', 'numeric'],
            'en_stock'=>['required', 'numeric'],
            'categorie_id' => ['required', 'exists:categories,id'],
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Produit::create([
            'image' => $imagePath,
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'en_stock'=> $request->en_stock,
            'categorie_id' => $request->categorie_id,
            'supermarche_id' => Auth::user()->supermarche_id,

        ]);

        return redirect()->route('produit.index')->with('succes', 'Produit ajouté avec succès');
    }

    /**
     * Afficher la ressource spécifiée.
     */
    public function show(string $id)
    {
        $produit = Produit::findOrFail($id);

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
        'en_stock'=>['required', 'numeric'],
        'categorie_id' => ['required', 'exists:categories,id'],
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $produit->image = $imagePath;
    }

    $produit->update([
       'image' => $imagePath,
        'nom' => $request->nom,
        'description' => $request->description,
        'prix' => $request->prix,
        'en_stock'=> $request->en_stock,
        'categorie_id' => $request->categorie_id,
        'supermarche_id' => Auth::user()->supermarche_id,
    ]);

    return redirect()->route('produit.index')->with('success', 'Produit modifié avec succès');
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
