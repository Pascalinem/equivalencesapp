
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2" wire:submit.prevent="submit">
@csrf
    <div class="-mx-3 md:flex mb-2">
        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="font-bold " for="type_demande">Type de demande: </label>
            <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" class="form-control" id="type_demande" 
            wire:model="type_demande">
            <option value="" selected>Type demande</option>    
            @foreach($equivalences as $key=>$value)         
                <option value="{{ $key}}">{{ $value }}</option>    
            @endforeach    
            </select>
            @error('type_demande') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        @if(Auth::user()->role_id == 2)
        <div class="md:w-1/3 px-3 ">
            <label  for="gestionnaire" class="font-bold">Gestionnaire</label>
            <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4" class="form-control" id="gestionnaire" 
            wire:model="gestionnaire_id">
            <option value="" selected >Choisir Gestionnaire</option>    
            @foreach($gestionnaires as $gestionnaire)    
                <option value="{{ $gestionnaire->id }}">{{ $gestionnaire->name }} {{ $gestionnaire->firstname }}</option>    
            @endforeach    
            </select>            
            @error('gestionnaire_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        @endif
    </div>
    
    @if(Auth::user()->role_id <4)
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/3 px-3 mb-6 md:mb-0">        
            <label  for="statut" class="font-bold">Statut</label>
            <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" class="form-control" id="statut" 
            wire:model="statut_demande">
            <option value="" selected >Statut</option>    
            @foreach($statuts as $key=>$value)    
                <option value="{{ $key }}">{{ $value}} </option>    
            @endforeach    
            </select>            
            @error('statut_demande') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="md:w-1/3 px-3">  
            <label  for="commission" class="font-bold">Commission</label>
            <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4" class="form-control" id="commission" 
            wire:model="commission_id">
            <option value="" selected >Attribuer Commission</option>    
            @foreach($commissions as $commission)    
                <option value="{{ $commission->id }}">{{ $commission->name }} </option>    
            @endforeach    
            </select>            
            @error('commission_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    @endif

@if($demande->type_demande === 'NIV' OR $demande->type_demande === 'ACA')
<div class="form-group py-4">
    <label for="copy_diploma">Copie diplôme </label>
    <input type="file" class="form-control-file border" name="copy_diploma" wire:model="copy_diploma">
    @error('copy_diploma') <span class="text-danger">{{ $message }}</span> @enderror
    <button  class="bg-white hover:bg-blue-400 text-gray-600 font-semibold mt-2 py-2 px-4 border border-gray-400 rounded shadow" wire:click="" wire:loading.attr="disabled">Télécharger</button>
</div>
    @if($demande->type_demande === 'ACA')
    <div class="form-group py-4">
        <label for="certified_copy_diploma">Copie certifiée diplôme </label>
        <input type="file" class="form-control-file border" name="certified_copy_diploma" wire:model="certified_copy_diploma">
    </div>
    @endif

    
        <div class="w-full px-3 mb-6 md:mb-0">      
        <label  for="statut" class="font-bold">Commentaire :</label>
        <textarea rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control" id="statut" 
        wire:model="commentaire">
        </textarea>
        @error('commentaire') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
   
<button type="submit" class="bg-[#FCB434] hover:bg-teal-800 text-white font-bold ml-2 w-1/3 mt-6 py-4 px-4  rounded shadow">Soumettre</button>
@else
@endif
</form>


</div>
