<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::with('role')->get();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nom'=> ['required'],
        'role'=> ['required'],
        'email'=> ['required'],
        'telephone'=> ['required'],
        'adresse'=> ['required'],
        ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('succes','Utilisateur créer avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
    $user = User::findOrFail($id);
    return view('user.show', compact('user'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user )
    {
        $request->validate([
            'nom'=> ['required'],
            'role'=> ['required'],
            'email'=> ['required'],
            'telephone'=> ['required'],
            'adresse'=> ['required'],
            ]);
            // dd($request->all());
            $user->update($request->all());  
          return redirect()->route('user.index')->with('succes','Utilisateur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        $user->delete();
        return redirect()->route('user.index')->with('succes','utilisateur supprimé avec succès');
    }
}
