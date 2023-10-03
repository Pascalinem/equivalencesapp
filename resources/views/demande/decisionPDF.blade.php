
<div class="w-full my-4">
    
    <h1 class="block ml-10 mb-8 text-2xl text-gray-700"> Demande n° {{ $demande->id }}</h1>
    <div class="w-full mx-10 mb-4 bg-white">
        <h3 class="font-bold bg-neutral-100 text-xl my-4">
            Informations Personnelles <hr>
        </h3>
        <div class="grid grid-cols-3 gap-4">
     
        <div><span class="" >Noms et prénoms:</span> {{ $demande->user->firstname  }} {{ $demande->user->name }}</div>
        <div><span class="" >Nom sur le diplôme: </span>{{ $demande->user->name_diploma  }}</div>
        <div><span class="" >Adresse mail et téléphone: </span>{{ $demande->user->email }}   {{ auth()->user()->telephone }}</div>
        <div><span class="" > Adresse: </span>{{ $demande->user->street }}  {{ $demande->user->postal_code }} {{ $demande->user->city }} {{ $demande->user->country }}</div>
        <div><span class="" > Adresse courrier, si différente adresse résidence: </span> {{ $demande->user->stree1 }} {{ $demande->user->postal_code1 }} {{ $demande->user->city1 }} {{ $demande->user->country1 }}</div>
        </div>

        <h3 class="font-bold bg-neutral-100 text-xl mt-10 mb-4">
            Informations Etudes <hr>
        </h3>
        <div class="grid grid-cols-3 gap-4">    
            
            <div><span class="" >Type des études: </span>{{ $etude->type }}</div>
            <div><span class="" >Durée officielle des études: </span>{{ $etude->school_years }}</div>
            <div><span class="" >Nom de l'établissement d'enseignement: </span>{{ $etude->school_name }}</div> 
            <div><span class="" >Pays des études: </span>{{ $etude->country }}</div> 
            <div><span class="" >Année de début des études: </span>{{ $etude->start_year }}</div> 
            <div><span class="" >Année de fin des études: </span>{{ $etude->end_year}}</div>  
        
        </div>       
        @livewire('demande.edit-demande-back-office',['demande_id' => $demande->id])
    
</div>
