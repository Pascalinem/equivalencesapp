<div
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    class=" mx-auto w-1/2 max-w-xs">
    @if ($this->showDemande)
        

        
 
 
<form bg-gray-200 shadow-md rounded px-4 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
@csrf
<div class="form-group">
<label for="type_demande">Type de demande d'équivalence</label>
<select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="type_demande" 
 wire:model="type_demande">
    <option value="" selected>Choisissez le type de demande que vous voulez introduire:</option>    
    @foreach($equivalences as $key=>$value)    
        <option value="{{ $key}}">{{ $value }}</option>    
    @endforeach    
</select>
@error('type_demande') <span class="text-danger">{{ $message }}</span> @enderror
</div>
@if($type_demande === 'NIV' OR $type_demande === 'ACA')
<div class="form-group">
    <label for="copy_diploma">Télécharger une copie de votre diplôme  </label>
    <input type="file" class="form-control-file border" name="copy_diploma">
</div>
    @if($type_demande === 'ACA')
    <div class="form-group">
        <label for="certified_copy_diploma">Télécharger une copie certifiée de votre diplôme </label>
        <input type="file" class="form-control-file border" name="certified_copy_diploma">
    </div>
    @endif

<button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Soumettre</button>
@else
@endif
</form>

@endif
</div>
