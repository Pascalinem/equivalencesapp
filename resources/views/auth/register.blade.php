@extends('layouts.app')

@section('content')
<h1 class="text-3xl text-purple-800 mb-6 text-center">Créez votre profil</h1>
<form method="POST" action="{{ route('register') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
    @csrf
    <div class="mb-4 w-1/2">
        <label for="name" class="block font-semibold text-gray-700 mb-2">Nom</label>
        <input id="name" type="text" name="name" class="shadow border rounded w-full p-2" value="{{ old('name') }}" autocomplete="name" placeholder="Choisissez un nom d'utilisateur" autofocus>
       @error('name')
              <span class="text-red-300 text-sm">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-4 w-1/2">
        <label for="email" class="block font-semibold text-gray-700 mb-2">Email</label>
        <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
        @error('email')
            <span class="text-red-300 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4 w-1/2">
        <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
        <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
        @error('password')
            <span class="text-red-300 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4 w-1/2">
        <label for="password_confirmation" class="block font-semibold text-gray-700 mb-2">Confirmation du mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="shadow border rounded w-full p-2" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" placeholder="Retapez votre mot de passe" autofocus>
    </div>

    <div class="mb-4 hidden ">
        <label for="role" class="block font-semibold text-gray-700 mb-2">Rôle</label>
        <input id="role" type="text" name="role_id" class="shadow border rounded w-full p-2" value="Demandeur" autocomplete="role" placeholder="Rôle" autofocus>
    </div>    
    @error('role_id')
        <span class="text-red-300 text-sm block">{{ $message }}</span>
    @enderror

    <button type="submit" class="bg-orange-500 text-white hover:bg-orange-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Créer mon compte</button>
</form>
@endsection