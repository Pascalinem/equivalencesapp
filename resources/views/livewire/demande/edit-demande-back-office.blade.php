<div class="py-4">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}



        
 
 
<form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
@csrf
<div class="form-group mt-10 py-4">

    <label class="bold text-xl" for="type_demande">Type de demande</label>
    <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="type_demande" 
    wire:model="type_demande">
        <option value="" selected>Type demande</option>    
        @foreach($equivalences as $key=>$value)    
            <option value="{{ $key}}">{{ $value }}</option>    
        @endforeach    
    </select>
    @error('type_demande') <span class="text-danger">{{ $message }}</span> @enderror
</div>
@if(Auth::user()->role_id == 2)
<div class="form-group py-4">
            
    <label  for="gestionnaire" class="bold text-xl">Gestionnaire</label>
    <select class="shadow appearance-none border rounded  py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="gestionnaire" 
    wire:model="gestionnaire_id">
        <option value="" selected >Choisir Gestionnaire</option>    
        @foreach($gestionnaires as $gestionnaire)    
            <option value="{{ $gestionnaire->id }}">{{ $gestionnaire->name }} {{ $gestionnaire->firstname }}</option>    
        @endforeach    
    </select>            
    @error('gestionnaire_id') <span class="text-danger">{{ $message }}</span> @enderror
</div>
@endif
@if(Auth::user()->role_id <4)
<div class="form-group py-4">
            
    <label  for="commission" class="bold text-xl">Commission</label>
    <select class="shadow appearance-none border rounded  py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="commission" 
    wire:model="commission_id">
        <option value="" selected >Attribuer Commission</option>    
        @foreach($commissions as $commission)    
            <option value="{{ $commission->id }}">{{ $commission->name }} </option>    
        @endforeach    
    </select>            
    @error('commission_id') <span class="text-danger">{{ $message }}</span> @enderror
</div>
@endif
@if($demande->type_demande === 'NIV' OR $demande->type_demande === 'ACA')
<div class="form-group py-4">
    <label for="copy_diploma">Copie diplôme </label>
    <input type="file" class="form-control-file border" name="copy_diploma" wire:model="copy_diploma">
    <button  class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-2 py-2 px-4 border border-gray-400 rounded shadow" wire:click="" wire:loading.attr="disabled">Télécharger</button>
</div>
    @if($demande->type_demande === 'ACA')
    <div class="form-group py-4">
        <label for="certified_copy_diploma">Copie certifiée diplôme </label>
        <input type="file" class="form-control-file border" name="certified_copy_diploma" wire:model="certified_copy_diploma">
    </div>
    @endif

<button type="submit" class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mx-4 mt-6 py-4 px-4 border border-gray-400 rounded shadow">Soumettre</button>
@else
@endif
</form>


</div>
