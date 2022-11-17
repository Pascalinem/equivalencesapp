<div
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    class=" mx-auto w-1/2 max-w-xs">
        <h3 class="mt-6 text-xl">1-Informations personelles </h3>
    <form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
    @csrf
        <div class="form-group">
            <label  for="nom">Nom </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom" placeholder="Entrer le nom" 
                wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="prenom">Prénom </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="prenom" placeholder="Entrer vos prénoms" 
                wire:model="firstname">
            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nomdipl">Nom sur le diplôme</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nomdipl" placeholder="Entrer le nom sur votre diplôme, si vous avez changé de nom" 
            wire:model="name_diploma">
            @error('name_diploma') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="date-naissance">Date de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" class="form-control" id="date-naissance" placeholder="Entrer votre date de naissance" 
            wire:model="date_of_birth">
            @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="lieu-naissance">Lieu de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="lieu-naissance" placeholder="Entrer votre lieu de naissance " 
            wire:model="place_of_birth">
            @error('place_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="pays-naissance">Pays de naissance</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="lieu-naissance" placeholder="Entrer votre pays de naissance " 
            wire:model="country_of_birth">
                <option value="test"> Test </option>
                <option value="test0"> Test0 </option>
            </select>
            @error('country_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="numero_national">Numéro national</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="numero_national" placeholder="Entrer votre numéro national belge si vous en avez un" 
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
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nationalite" placeholder="Votre nationalité actuelle" 
            wire:model="nationality">
            @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div> Votre adresse de résidence actuelle
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
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="lieu-residence" placeholder="Entrer votre pays de residence " 
                wire:model="country">
                    <option value="Y"> Y </option>
                    <option value="u"> u </option>
                </select>
                @error('country') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <!--<div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="" disabled>Votre adresse de résidence est-elle votre adresse courrier?
                </label>
            </div>-->
        </div>
          <br>
        <div>Votre adresse courrier
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
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays-residence-courrier" placeholder="Entrer le pays  " 
                wire:model="country1">
                    <option value="Z"> Z </option>
                    <option value="t"> t </option>
                </select>
                @error('country1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
            <div class="form-group">
                <label for="numero-telephone">Numéro de téléphone</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="numero-telephone" placeholder="Entrer votre numéro de téléphone" 
                wire:model="telephone">
                @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label  for="email">Adresse mail</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="email" placeholder="Entrez votre adresse  mail" 
                wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group hidden">
                
                <input type="number" class="form-control" id="role_id" value="4" wire:model="role_id">
                <input id="password" type="password" name="password" value="test" wire:model="password">
            </div>
            <div class="form-group">
                <label for="id-card">Télécharger votre document d'identité ( recto -verso sur un seul document) - pdf </label>
                <input type="file" class="form-control-file border" name="id-card">
            </div>
        
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder vos informations</button>
    </form>
</div>