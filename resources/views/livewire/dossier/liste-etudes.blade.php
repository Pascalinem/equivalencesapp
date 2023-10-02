<div>
    @if ($this->liste_etudes == 1)
        @if ( count($this->etudes)==0)
        <div class="mb-6"> Pas de dossier en cours.</div>
        @else
    
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2"> Type études</th>
                        <th class="px-4 py-2"> Nom établissement</th>
                        <th class="px-4 py-2"> Pays des études</th>
                        <th class="px-4 py-2">Durée officielle des études</th>
                        <th class="px-4 py-2">Année de début</th>
                        <th class="px-4 py-2">Année de Fin</th>
                        <th class="px-4 py-2">Nom Gestionnaire</th>
                        <th class="px-4 py-2">Email Gestionnaire</th>
                        <th th class=" py-2"> Statut demande</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->etudes as $item)

                    <tr>
                        <td class="px-4 py-2" > {{  $item->type}}</td>
                        <td class="px-4 py-2"> {{  $item->school_name}}</td>
                        <td class="px-4 py-2"> {{  $item->country}}</td>
                        <td class="px-4 py-2"> {{  $item->school_years}}</td>
                        <td class="px-4 py-2"> {{  $item->start_year}}</td>
                        <td class="px-4 py-2"> {{  $item->end_year}}</td>
                        <td class="px-4 py-2"> {{  $item->name?$item->name:"N/A"}}</td>
                        <td class="px-4 py-2 text-blue-600"> <a href="mailto:{{ $item->email}}?subject= Demande n°{{ $item->demande_id }}" target="_blank">{{  $item->email?$item->email:"N/A"}}</td>
                        <td> 
                            @if($item->demande_id)
                                @if($item->statut_demande == "Decision")
                                    <span class=" text-sm mb-4 mt-8 p-2 bg-green-200"><a href="" > Test</a></span>
                                @else
                                <span class=" text-sm mb-4 mt-8 p-2 bg-green-200"> En cours</span>
                                @endif
                            @else
                            <button  href='#liste-etudes' class="bg-white hover:bg-green-400 text-gray-800 font-semibold mb-4 mt-8 py-4 px-4 border border-gray-400 rounded shadow" wire:click="creerDemande({{ $item}})">Introduire une demande</button>
                            @endif 
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
            <button x-data="{}" x-on:click="window.livewire.emitTo('etude-modal', 'show')"
            class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-8 py-2 px-4 border border-gray-400 rounded shadow" wire:click="ajouterEtudes() ">Ajouter étude(s)</button>
            
        @endif
        @else Cette demande d'équivalence concerne : 
        @endif
            
       
</div>
