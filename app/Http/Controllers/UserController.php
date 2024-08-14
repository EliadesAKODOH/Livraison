<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $request->validate([
        'nom'=> ['required'],
        'role_id' => ['required', 'exists:roles,id'],
        'email'=> ['required'],
        'telephone'=> ['required'],
        'adresse'=> ['required'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'nom' => $request->nom,
            'role_id' => $request->role,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse'=> $request->adresse,
            'password' => Hash::make($request->password),
            'supermarche_id'=>1,
        ]);
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
        $roles = Role::all();
        return view('user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user )
    {
        $request->validate([
            'nom'=> ['required'],
            'role_id'=> ['required'],
            'email'=> ['required'],
            'telephone'=> ['required'],
            'adresse'=> ['required'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            // dd($request->all());
            $user->update([
              'nom' => $request->nom,
            'role_id' => $request->role,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse'=> $request->adresse,
            'password' => Hash::make($request->password),
            ]);
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
