@extends('layouts.app')

@section('content')

    
<h1 class=" content-center text-3xl bolder  mb-8  text-center">Introduire une demande d'équivalence de votre diplôme étranger</h1>
<h2 class=" content-center text-2xl bolder  mb-8  text-center">Connexion</h2>
<div class="flex justify-center "> 
        <form method="POST" action="{{ route('login') }}" style ="background-color:#1c3c82 " class="w-1/2 mx-auto rounded-lg border shadow-md p-5 mb-5">
            @csrf
            
            <div >
                <label for="email" class="block font-semibold text-white ml-4 mb-4">Login</label>
                <input  id="email" type="email" name="email" class="mx-auto shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Entrez votre email" autofocus>
                @error('email')
                    <span class="text-red-400 text-sm">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>

            <div >
                <label for="password" class="block font-semibold text-white ml-4 my-4">Mot de passe</label>
                <input id="password" type="password" name="password" class="mx-auto shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
            @error('password')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-[#FCB434]  text-black bold font-bold hover:bg-gray-300 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Se connecter</button>
        </form>
   
</div>
@endsection