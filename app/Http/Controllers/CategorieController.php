<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::all();
        return view('categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
           'nom'=>['required'],
        ]);
        Categorie::create([
            'nom'=>$request->nom,
            'supermarche_id'=> Auth::user()->supermarche_id
        ]);

      return redirect()->route('categorie.index')->with('succes','Categorie ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::findOrFail($id);
        
       return view('categorie.show', compact('categorie'));
    }

    public function edit($id)
{
    $categorie = Categorie::find($id);
    return view('categorie.edit', compact('categorie'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required|string|max:255',
    ]);

    $categorie = Categorie::find($id);
    $categorie->nom = $request->nom;
    $categorie->save();

    return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès');
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
