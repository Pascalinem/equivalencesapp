@extends('layouts.app')

@section('content')

<div class="w-full my-4">
    <!--div info utilisateur-->  
    <h2 class=" text-2xl my-10"> Infos utilisateur </h2>
    <div class="grid grid-cols-3 gap-4">
     
        <div><span class="font-bold" >Noms et prénoms:</span> {{ auth()->user()->name }} {{ auth()->user()->firstname }}</div>
        <div><span class="font-bold" >Nom sur le diplôme: </span>{{ auth()->user()->name_diploma }}</div>
        <div><span class="font-bold" >Adresse mail et téléphone: </span>{{ auth()->user()->email }}   {{ auth()->user()->telephone }}</div>
        <div><span class="font-bold" > Adresse: </span>{{ auth()->user()->street }}  {{ auth()->user()->postal_code }} {{ auth()->user()->city }} {{ auth()->user()->country }}</div>
        <div><span class="font-bold" > Adresse courrier, si différente adresse résidence: </span> {{ auth()->user()->stree1 }} {{ auth()->user()->postal_code1 }} {{ auth()->user()->city1 }} {{ auth()->user()->country1 }}</div>
    </div>

    
        <div class="grid grid-cols-3 gap-4">    
            <h2 class=" text-2xl mt-10"> Etude </h2>
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

