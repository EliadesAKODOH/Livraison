<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required', 'numeric', 'digits_between:8,15'],
            'adresse' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'numeric']
            // 'type'=>['required','in:client,livreur,administrateur'],

        ]);

        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'password' => Hash::make($request->password),
            'role_id' => 2

        ]);


       return redirect('/');
            // 'type'=>$request->type,
       return redirect('login');
    }
}
