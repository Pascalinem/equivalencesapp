@extends('layouts.app')

@section('content')

<div class="w-full">
    <!--div info utilisateur-->  
    <div class="grid grid-cols-3 gap-4">
        <div>Noms et prénoms:{{ auth()->user()->name }} {{ auth()->user()->firstname }}</div>
        <div>Nom sur le diplôme: {{ auth()->user()->name_diploma }}</div>
        <div>Adresse mail et téléphone: {{ auth()->user()->email }} - {{ auth()->user()->telephone }}</div>
        <div> Adresse: {{ auth()->user()->street }}, {{ auth()->user()->postal_code }} {{ auth()->user()->city }} {{ auth()->user()->country }}</div>
        <div> Adresse courrier, si différente adresse résidence:  {{ auth()->user()->stree1 }}, {{ auth()->user()->postal_code1 }} {{ auth()->user()->city1 }} {{ auth()->user()->country1 }}</div>
    </div>
    <!--DIV infos etudes-->     
    <div class="grid grid-cols-3 gap-4">    
        
        <div>Type des études: {{ $etude->type }}</div>
        <div>Durée officielle des études: {{ $etude->school_years }}</div>
        <div>Nom de l'établissement d'enseignement: {{ $etude->school_name }}</div> 
        <div>Pays des études: {{ $etude->country }}</div> 
        <div>Année de début des études: {{ $etude->start_year }}</div> 
        <div>Année de fin des études: {{ $etude->end_year}}</div>  
       
    </div>       
    <div>@livewire('demande.edit-demande-back-office',['demande_id' => $demande->id])</div>
</div>
@endsection

