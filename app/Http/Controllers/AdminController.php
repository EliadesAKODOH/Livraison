<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::all()->where('is_admin', '0');
        return view('pages/admin/index',  compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'sexe' => ['required', 'string', 'max:10'],
            'profession' => ['required', 'string', 'max:50'],
        ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->sexe = $request->sexe;
            $user->profession = $request->profession;
            $user->is_admin = 1;
            $user->save();


        $user->assignRole('user');

        event(new Registered($user));

        Auth::login($user);

        return view('auth/login');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $updates = User::find($id);
        return view('pages/admin/edit', compact('updates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user =  User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sexe = $request->sexe;
        $user->profession = $request->profession;
        $user->save();

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = User::find($id);
        $destroy->delete();

        return redirect('admin');
    }
}
