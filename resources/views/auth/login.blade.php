@extends('layouts.app')

@section('content')
<h1 style ="color:#E42C34  " class="text-3xl bolder mb-4 text-center">Connexion</h1>
<form method="POST" action="{{ route('login') }}" style ="background-color:#1c3c82 " class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
    @csrf
    
    <div class="mb-4">
        <label for="email" class="block font-semibold text-gray-700 mb-2">Login</label>
        <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Entrez votre email" autofocus>
        @error('email')
            <span class="text-red-400 text-sm">
                <span>{{ $message }}</span>
            </span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
        <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
       @error('password')
            <span class="text-red-400 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" style= "background-color:#FCB434" class=" text-black bold hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Se connecter</button>
</form>
@endsection