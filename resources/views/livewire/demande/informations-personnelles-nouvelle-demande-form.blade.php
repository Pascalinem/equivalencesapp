<div
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    class=" mx-auto w-1/2 max-w-xs">
        <h3 class="mt-6 text-xl">1-Informations personelles </h3>
    <form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        <div class="form-group">
            <label  for="nom">Nom </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom" placeholder="Entrer le nom" wire:model="nom">
            @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="nomdipl">Nom sur le diplôme, si vous avez changé de nom</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nomdipl" placeholder="Entrer le nom sur votre diplôme, si vous avez changé de nom" wire:model="nomdipl">
            @error('nomdipl') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="date-naissance">Date de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" class="form-control" id="date-naissance" placeholder="Entrer votre date de naissance" wire:model="date_naissance">
            @error('date_naissance') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="lieu-naissance">Lieu de naissance</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="lieu-naissance" placeholder="Entrer votre lieu de naissance " wire:model="lieu_naissance">
            @error('lieu_naissance') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="pays-naissance">Pays de naissance</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="lieu-naissance" placeholder="Entrer votre pays de naissance " wire:model="pays_naissance">
                <option> X </option>
            </select>
            @error('pays_naissance') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <p>Votre adresse de résidence actuelle</p>
            <label  for="adresse-rue">Rue et numéro</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-rue" placeholder="Entrer la rue et le numéro" wire:model="adresse_rue">
            @error('adresse_rue') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="adresse-ville">Ville/Commune</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-ville" placeholder="Entrer le lieu de résidence actuelle" wire:model="adresse_ville">
            @error('adresse_ville') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="adresse-code-postal">Code Postal</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal" placeholder="Entrer le code postal" wire:model="adresse_code_postal">
            @error('adresse_code_postal') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="pays-residence">Pays</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="lieu-residence" placeholder="Entrer votre pays de residence " wire:model="pays_residence">
                <option> Y </option>
            </select>
            @error('pays_residence') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" disabled>Votre adresse de résidence est-elle votre adresse courrier?
            </label>
          </div>
          <div class="form-group">
            <p>Votre adresse courrier</p>
            <label  for="adresse-rue-courrier">Rue et numéro</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-rue-courrier" placeholder="Entrer la rue et le numéro" wire:model="adresse_rue_courrier">
            @error('adresse_rue_courrier') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="adresse-ville-courrier">Ville/Commune</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-ville-courrier" placeholder="Entrer le lieu de résidence actuelle" wire:model="adresse_ville_courrier">
            @error('adresse_ville_courrier') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label  for="adresse-code-postal-courrier">Code Postal</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal-courrier" placeholder="Entrer le code postal" wire:model="adresse_code_postal_courrier">
            @error('adresse_code_postal_courrier') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="pays-courrier">Pays</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="pays-residence-courrier" placeholder="Entrer le pays  " wire:model="pays_courrier">
                <option> Z </option>
            </select>
            @error('pays_courrier') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="numero-telephone">Numéro de téléphone</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="numero-telephone" placeholder="Entrer votre numéro de téléphone" wire:model="numero-telephone">
            @error('numero_telephone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="id-card">Télécharger votre document d'identité ( recto -verso sur un seul document) - pdf </label>
            <input type="file" class="form-control-file border" name="id-card">
          </div>
       
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder vos informations</button>
    </form>
</div>
