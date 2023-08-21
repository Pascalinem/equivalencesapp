
@if ($showForm)
<div class=" w-full mb-6  mx-20 px-20 " >
     {{-- Success is as dangerous as failure. --}}
        <h3 class="mt-6 py-10 text-xl mx-4 font-bold ">{{ $this->step }}-Informations sur vos études {{ $this->etudes }}</h3>
    <form bg-gray-200 shadow-md rounded  mx-10 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
    @csrf
    <h4 class="px-10 mb-4 mt-6 text-xl">Etudes {{ $this->etudes }} </h4>
        <div class="form-group ">
            <label  for="country">Pays de scolarité</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays_primaire"  
                wire:model="country">
                <option value="" selected>Choisir le pays du diplôme d'études {{ $this->etudes }}</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
            </select>
            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
     <div class="form-group ">
            <label  for="nombre_annees">Durée officielle des études poursuivies: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" class="form-control" id="nombre_annees" placeholder="Entrez la durée officielle des études {{ $this->etudes }}" 
                wire:model="school_years">
            @error('school_years') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group ">
            <label  for="annee_debut">Année de début des études {{ $this->etudes }}</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="annee_debut" placeholder="Entrer l'année de début de vos études {{ $this->etudes }}" 
            wire:model="start_year">
            @error('start_year') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group ">
            <label for="end_year">Année de fin des études {{ $this->etudes }}</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="end_year" placeholder="Entrer l'année de fin de vos études {{ $this->etudes }}" 
            wire:model="end_year">
            @error('end_year') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group ">
            <label  for="nom_ecole_primaire">Nom école</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom_ecole_primaire" placeholder="Entrer le nom de l'école {{ $this->etudes }}" 
                wire:model="school_name">
            @error('school_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      {{--    <div class="form-group">
            <label  for="nom_diplome_primaire">Nom diplôme d'études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom_diplome_primaire" placeholder="Entrer le nom de votre diplôme d'études primaires" 
                wire:model="degree">
           @error('degree') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="authority_primary">Autorité ayant délivré le diplôme d'études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="authority_primary" placeholder="Quelle autorité a délivré votre diplôme d'études secondaires ?" 
                wire:model="authority_primary">
            @error('authority_primary') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="dateOfIssue_primary">Date de délivrance du diplôme d'études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" class="form-control" id="dateOfIssue_primary" placeholder="Entrez la date de délivrance du diplôme" 
            wire:model="dateOfIssue_primary">
            @error('dateOfIssue_primary') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="secondaryTrue">Je n'ai pas suivi d'études secondaires</label>
            <input type="checkbox" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="secondaryTrue" wire:model="secondaryTrue"/>
            @error('secondaryTrue') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <h4 class="mt-6 text-xl">Etudes secondaires </h4>
        <div class="form-group">
            <label  for="pays_secondaire">Pays de scolarité</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays_secondaire"  
                wire:model="country_secondary_education">
                <option value="" selected>Choisir pays du diplôme d'études secondaires</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
            </select>
            @error('country_secondary_education') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nombre_annees_secondaire">Durée officielle des études poursuivies: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" class="form-control" id="nombre_annees_secondaire" placeholder="Entrez la durée officielle des études secondaires" 
                wire:model="secondary_school_years">
            @error('secondary_school_years') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="secondaire_annee_debut">Année de début des études secondaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="secondaire_annee_debut" placeholder="Entrer l'année de début de vos études secondaires" 
            wire:model="start_year_secondary_school">
            @error('start_year_secondary_school') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="secondaire_annee_fin">Année de fin des études secondaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="secondaire_annee_fin" placeholder="Entrer l'année de fin de vos études secondaires" 
            wire:model="end_year_secondary_school">
            @error('end_year_secondary_school') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nom_ecole_secondaire">Nom école</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom_ecole_secondaire" placeholder="Entrer le nom de l'école secondaire" 
                wire:model="secondary_school_name">
            @error('secondary_school_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="SecondarySchoolLocality">Localité/ville école secondaire</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="lieu-naissance" placeholder="Entrer votre lieu de naissance " 
            wire:model="SecondarySchoolLocality">
            @error('SecondarySchoolLocality') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nom_diplome_secondaire">Nom diplôme d'études secondaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="SecondarySchoolLocality" placeholder="Entrer la ville de l'école de vos études secondaires" 
                wire:model="secondary_school_degree">
            @error('secondary_school_degree') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="authority_secondary">Autorité ayant délivré le diplôme d'études secondaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="authority_secondary" placeholder="Quelle autorité a délivré votre diplôme d'études secondaires ?" 
                wire:model="authority_secondary">
            @error('authority_secondary') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="secondaryOtherInformation">Autres informations sur vos études secondaires</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  class="form-control" id="secondaryOtherInformation" placeholder="Informations supplémentaires sur votre école, votre diplôme ou vos études secondaires" 
                wire:model="secondaryOtherInformation">
            @error('secondaryOtherInformation') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        --}} 

    
    <button type="submit" class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder mes informations sur mes études {{ $this->etudes }}</button>
</form>
@else
<div class="mb-6"> Voulez-vous enregistrer les informations sur vos études {{ $this->etudes }} ?
    <button  class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow" wire:click="showForm()">Oui</button>
    <button  class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow" wire:click="retourAccueil()">Non</button>
</div>
@endif

</div>


</div>
