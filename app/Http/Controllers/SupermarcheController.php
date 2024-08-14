<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supermarche;

class SupermarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supermarches = Supermarche::all();
        return view('supermarche.index', compact('supermarches'));
    }
    /**
     * Montrer le formulaire pour créer une nouvelle ressource.
     */
    public function create()
    {
        return view('supermarche.create');
    }

    /**
     * Stocker une ressource nouvellement créée dans le stockage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_sup' => ['required','max:20'],
            'email_sup' => ['required','email','string','unique:'.Supermarche::class],
            'adresse_sup' => ['required'],
            'image_sup' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $imagePath = null;
        if ($request->hasFile('image_sup')) {
            $imagePath = $request->file('image_sup')->store('uploads', 'public');
        }

        $image = $request->file('image_sup');
        $imagePath = $image->store('images','public');




        Supermarche::create([
            'nom_sup' => $request->nom_sup,
            'email_sup' => $request->email_sup,
            'adresse_sup' => $request->adresse_sup,
            'image_sup' =>  $imagePath,


        ]);


        return redirect()->route('supermarche.index')->with('succes', 'Supermarché ajouté avec succès');
    }

    /**
     * Afficher la ressource spécifiée.
     */
    public function show(string $id)
    {
        $supermarche = Supermarche::findOrFail($id);
       // dd($supermarche->image);
        return view('supermarche.show', compact('supermarche'));
    }

    /**
     * Montrer le formulaire pour éditer la ressource spécifiée.
     */
    public function edit(Supermarche $supermarche)
    {
        $supermarche = Supermarche::all();
        return view('supermarche.edit', compact('supermarche'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nom_sup' => ['required'],
        'email_sup' => ['required'],
        'adresse_sup' => ['required'],
        'image_sup' => ['required', 'image'],
    ]);

    $image = $request->file('image');
    $imagePath = $image->store('images','public');

    $supermarche = supermarche::find($id);
    $supermarche->nom_sup = $request->nom_sup;
    $supermarche->email_sup = $request->email_sup;
    $supermarche->adresse_sup = $request->adresse_sup;
    $supermarche->image_sup = $request->image_sup;
    $supermarche->save();

    return redirect()->route('supermarche.index')->with('succes', 'supermarche modifié avec succès');
}
    public function destroy(Supermarche $supermarche)
    {
        $supermarche->delete();
        return redirect()->route('supermarche.index')->with('succes', 'supermarche supprimé avec succès');
    }
}
