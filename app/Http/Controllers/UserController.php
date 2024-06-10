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
        $users= User::with('roles')->get();
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
        return redirect('/')->width('succes','Utilisateur créer avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
        $user= User::all();
        return view('user.show');
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
    public function update(Request $request, string $id )
    {
        $request->validate([
            'nom'=> ['required'],
            'role'=> ['required'],
            'email'=> ['required'],
            'telephone'=> ['required'],
            'adresse'=> ['required'],
            ]);
            User::updated($request->all());
            return redirect('/')->width('succes','Utilisateur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/')->width('succes','Utilisateur supprimé avec succès');
    }
}
