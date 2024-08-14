@extends('partials.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card mt-5">
                    <div class="card-header text-center">

                        <h3>Modifier les informations</h3>
                        <form action="{{route('user.update', $user->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                             <input type="text" name="nom" value="{{$user->nom}}" class="m-2"><br>
                                @error('nom')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select name="role_id" id="" class="form-control">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select> <br>
                                @error('role')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" value="{{$user->email}}" class="m-2"><br>
                                @error('email')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="number" name="telephone" value="{{$user->telephone}}" class="m-2"><br>
                                @error('telephone')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" name="adresse" value="{{$user->adresse}}" class="m-2"><br>
                                @error('adresse')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" value="{{$user->password}}" class="m-2"><br>
                                @error('Mot de passe')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" >Enregistrer</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
