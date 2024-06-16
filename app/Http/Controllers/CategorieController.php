<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::all();
        return view('client.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Categorie $categorie)
    {
        $request->validate([
           'nom'=>['required'],
        ]);
        Categorie::create($request->all());
      return redirect()->route('client.index')->with('succes','Categorie ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::findOrFail($id);
        
       return view('client.index', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('client.index', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nom'=>['required'],
         ]);
         Categorie::update($request->all());
       return redirect()->route('client.index')->with('succes','Categorie ajouté avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        
        $categorie->delete();
        return redirect()->route('client.index')->with('succes','Categorie supprimé avec succès');
    }
}
