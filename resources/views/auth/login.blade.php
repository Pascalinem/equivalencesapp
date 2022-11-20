@extends('layouts.app')

@section('content')
<h1 style ="color:#E42C34  " class="text-3xl bolder mb-4 text-center">Connexion</h1>
<form method="POST" action="{{ route('login') }}" style ="background-color:#1c3c82 " class="w-1/2 max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
    @csrf
    
    <div >
        <label for="email" class="block font-semibold text-white ml-4 mb-4">Login</label>
        <input  id="email" type="email" name="email" class="ml-12 shadow border rounded w-1/2 p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Entrez votre email" autofocus>
        @error('email')
            <span class="text-red-400 text-sm">
                <span>{{ $message }}</span>
            </span>
        @enderror
    </div>

    <div >
        <label for="password" class="block font-semibold text-white ml-4 mb-4">Mot de passe</label>
        <input id="password" type="password" name="password" class="ml-12 shadow border rounded w-1/2 p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
       @error('password')
            <span class="text-red-400 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" style= "background-color:#FCB434" class=" text-black bold font-bold hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Se connecter</button>
</form>
@endsection