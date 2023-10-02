@extends('layouts.app')

@section('content')

<div class="w-full my-4">
    
    <h1 class="block ml-4 mb-8 text-2xl text-gray-700"> Demande n° {{ $demande->id }}</h1>
    <div class="w-full mx-10 mb-4 bg-white">
        <h3 class="font-bold bg-neutral-100 text-xl">
            Infos Personne <hr>
        </h3>
        <div class="grid grid-cols-3 gap-4">
     
        <div><span class="font-bold" >Noms et prénoms:</span> {{ $demande->user->firstname  }} {{ $demande->user->name }}</div>
        <div><span class="font-bold" >Nom sur le diplôme: </span>{{ $demande->user->name_diploma  }}</div>
        <div><span class="font-bold" >Adresse mail et téléphone: </span>{{ $demande->user->email }}   {{ auth()->user()->telephone }}</div>
        <div><span class="font-bold" > Adresse: </span>{{ $demande->user->street }}  {{ $demande->user->postal_code }} {{ $demande->user->city }} {{ $demande->user->country }}</div>
        <div><span class="font-bold" > Adresse courrier, si différente adresse résidence: </span> {{ $demande->user->stree1 }} {{ $demande->user->postal_code1 }} {{ $demande->user->city1 }} {{ $demande->user->country1 }}</div>
        </div>

        <h3 class="font-bold bg-neutral-100 text-xl">
            Infos Etude <hr>
        </h3>
        <div class="grid grid-cols-3 gap-4">    
            
            <div><span class="font-bold" >Type des études: </span>{{ $etude->type }}</div>
            <div><span class="font-bold" >Durée officielle des études: </span>{{ $etude->school_years }}</div>
            <div><span class="font-bold" >Nom de l'établissement d'enseignement: </span>{{ $etude->school_name }}</div> 
            <div><span class="font-bold" >Pays des études: </span>{{ $etude->country }}</div> 
            <div><span class="font-bold" >Année de début des études: </span>{{ $etude->start_year }}</div> 
            <div><span class="font-bold" >Année de fin des études: </span>{{ $etude->end_year}}</div>  
        
        </div>       
        <div>@livewire('demande.edit-demande-back-office',['demande_id' => $demande->id])</div>
    
</div>
@endsection

