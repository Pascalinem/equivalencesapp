<div>

    @if ( count($this->etudes)==0)
        Pas de dossier en cours.
    @else
    
        <table>
            <tr>
                <th> Type</th>
                <th> School Name</th>
                <th> Country</th>
                <th> School years</th>
                <th> Start Year</th>
                <th> End Year</th>
                <th> </th>
            </tr>
            @foreach ($this->etudes as $item)

            <tr>
                <td> {{  $item->type}}</td>
                <td> {{  $item->school_name}}</td>
                <td> {{  $item->country}}</td>
                <td> {{  $item->school_years}}</td>
                <td> {{  $item->start_year}}</td>
                <td> {{  $item->end_year}}</td>
                <td> 
                    @if($item->demande_id)
                    Dossier en Cours
                    @else
                    <button  class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow" wire:click="creerDemande({{ $item->id}})">Introduire une demande</button>
                    @endif 
                </td>
            </tr>

            @endforeach
        </table>
    @endif
</div>