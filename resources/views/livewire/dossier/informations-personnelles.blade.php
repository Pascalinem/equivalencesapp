<div
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    class=" mx-20 px-20 ">
        <h3 class=" py-10 text-2xl bolder ">1-Informations personnelles </h3>
    <form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label  for="nom">Nom(s) officiel(s) </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom" placeholder="Entrez vos noms officiels" 
                wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="prenom">Prénom(s) officiel(s) </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="prenom" placeholder="Entrez vos prénoms" 
                wire:model="firstname">
            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nomdipl">Nom sur le diplôme</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nomdipl" placeholder="Entrez le nom sur votre diplôme, si vous avez changé de nom" 
            wire:model="name_diploma">
            @error('name_diploma') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="date-naissance">Date de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" class="form-control" id="date-naissance" placeholder="Entrez votre date de naissance" 
            wire:model="date_of_birth">
            @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="lieu-naissance">Lieu de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="lieu-naissance" placeholder="Entrez votre lieu de naissance " 
            wire:model="place_of_birth">
            @error('place_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
          
            <label for="pays-naissance">Pays de naissance</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays-naissance" 
            wire:model="country_of_birth">
                <option value="" selected>Choisir le pays de naissance</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
             </select>
            @error('country_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="numero_national">Numéro national</label>
            <input class="shadow appearance-none border bg-violet-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="numero_national" placeholder="Entrer votre numéro national belge si vous en avez un" 
            wire:model="national_number">
            @error('national_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="sexe">Sexe</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="sexe" placeholder="Votre sexe" 
            wire:model="gender">
            @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            
            <label  for="nationalite">Nationalité</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="nationalite" 
            wire:model="nationality">
                <option value="" selected>Choisir nationalité</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
            </select>            
            @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div > <h4 class="my-4 py-4 bolder text-blue-500 text-xl " >Votre adresse de résidence actuelle</h4>
            <div class="form-group">
                <label  for="adresse-rue">Rue et numéro</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-rue" placeholder="Entrer la rue et le numéro" 
                wire:model="street">
                @error('street') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="adresse-ville">Ville/Commune</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-ville" placeholder="Entrer le lieu de résidence actuelle" 
                wire:model="city">
                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label  for="adresse-code-postal">Code Postal</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal" placeholder="Entrer le code postal" 
                wire:model="postal_code">
                @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               
                <label for="pays-residence">Pays</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays-residence" 
                wire:model="country">
                <option value="" selected>Choisir pays résidence</option>    
                @foreach($countriesAll as $country)    
                    <option value="{{ $country->name }}">{{ $country->name }}</option>    
                @endforeach    
            </select>
                @error('country') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
        </div>
          <br>
          <div class="form-check">
                <label class="my-4 form-check-label">
                <input type="checkbox" class="form-check-input" value="" wire:click="showAdresseCourrier()">Je souhaite recevoir le courrier à une adresse différente
                </label>
            </div>
        @if($adresseCourrier)
        <div><h4 class="my-10">Adresse courrier (<i>à ne compléter que si différente adresse de résidence !</i>)</h4>
            <div class="form-group">
            
                <label  for="adresse-rue-courrier">Rue et numéro</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-rue-courrier" placeholder="Entrer la rue et le numéro" 
                wire:model="street1">
                @error('street1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="adresse-ville-courrier">Ville/Commune</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-ville-courrier" placeholder="Entrer le lieu de résidence actuelle" 
                wire:model="city1">
                @error('city1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label  for="adresse-code-postal-courrier">Code Postal</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal-courrier" placeholder="Entrer le code postal" 
                wire:model="postal_code1">
                @error('postal_code1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
               
                <label for="pays-courrier">Pays</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays-courrier"
                 wire:model="country1">
                    <option value="" selected>Choisir pays courrier</option>    
                    @foreach($countriesAll as $country)    
                        <option value="{{ $country->name }}">{{ $country->name }}</option>    
                    @endforeach    
                </select>
                @error('country1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        @endif
            <div class="form-group">
                <label for="numero-telephone">Numéro de téléphone</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="numero-telephone" placeholder="Entrer votre numéro de téléphone" 
                wire:model="telephone">
                @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="refugee">Réfugié</label>
                <input type="checkbox" class="shadow appearance-none border-lime-500 rounded w-4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="refugee" wire:model="refugee"/>
                @error('refugee') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="actiris">Inscription active chez Actiris</label>
                <input type="checkbox" class="shadow appearance-none border-lime-500 rounded w-4  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="actiris" wire:model="actiris"/>
                @error('actiris') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="vdab">Inscription chez VDAB</label>
                <input type="checkbox" class="shadow appearance-none border-lime-500 rounded w-4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="vdab" wire:model="vdab"/>
                @error('vdab') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            
            <div class="form-group">
                <label for="id-card">Télécharger votre document d'identité ( recto -verso sur un seul document) - pdf </label>
                <input type="file" class="form-control-file border" name="id-card">
            </div>
        
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder vos informations personnelles</button>
    </form>
</div>
