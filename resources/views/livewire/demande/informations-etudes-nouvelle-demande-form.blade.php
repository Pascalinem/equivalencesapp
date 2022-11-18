<div class=" mx-auto w-1/2 max-w-xs">
     {{-- Success is as dangerous as failure. --}}
        <h3 class="mt-6 py-10 text-xl">2-Informations sur vos études primaires et secondaires</h3>
    <form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
    @csrf
    <h4 class="mt-6 text-xl">Etudes primaires </h4>
        <div class="form-group">
            <label  for="pays_primaire">Pays de scolarité</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays_primaire"  
                wire:model="country_primary_education">
                <option value="" selected>Choisir le pays du diplôme d'études primaires</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
            </select>
            @error('country_primary_education') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
     <div class="form-group">
            <label  for="nombre_annees_primaire">Durée officielle des études poursuivies: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" class="form-control" id="nombre_annees_primaire" placeholder="Entrez la durée officielle des études primaires" 
                wire:model="primary_school_years">
            @error('primary_school_years') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="primaire_annee_debut">Année de début des études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="primaire_annee_debut" placeholder="Entrer l'année de début de vos études primaires" 
            wire:model="start_year_primary_school">
            @error('start_year_primary_school') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="primaire_annee_fin">Année de fin des études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="primaire_annee_fin" placeholder="Entrer l'année de fin de vos études primaires" 
            wire:model="end_year_primary_school">
            @error('end_year_primary_school') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nom_ecole_primaire">Nom école</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom_ecole_primaire" placeholder="Entrer le nom de l'école primaire" 
                wire:model="primary_school_name">
            @error('primary_school_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      {{--    <div class="form-group">
            <label  for="nom_diplome_primaire">Nom diplôme d'études primaires</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom_diplome_primaire" placeholder="Entrer le nom de votre diplôme d'études primaires" 
                wire:model="primary_school_degree">
           @error('primary_school_degree') <span class="text-danger">{{ $message }}</span> @enderror
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
    
    
    <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder mes informations sur mes études primaires et secondaires</button>
</form>
</div>


</div>
