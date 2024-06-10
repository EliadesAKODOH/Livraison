<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produit.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Produit $produits, Request $request )
    {
      $request-> validate([
        'nom' =>['required'],
        'description' => ['required'],
        'categorie' => ['required'],
        'prix' => ['required','min:1FCFA'],
      ]);
      Produit::create($request->all());
      return redirect('/')->width('succes','Utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produit.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Produit $produit)
    {
        return view('produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id , Produit $produit)
    {
        $request-> validate([
            'nom' =>['required'],
            'description' => ['required'],
            'categorie' => ['required'],
            'prix' => ['required','min:1FCFA'],
          ]);
          Produit::updated($request->all());  
          return redirect('/')->width('succes','Utilisateur modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Produit::findOrFail($id);
        $user->delete();
        return redirect('/')->width('succes','Utilisateur supprimé avec succès');
    }
}
