<?php

namespace App\Http\Livewire\Dossier;

use App\Http\Livewire\Demande\NouveauDossier;
use App\Models\User;
use App\Models\Etude;
use App\Models\Demande;
use Livewire\Component;

class ListeEtudes extends Component
{
    

    
    public $user_id;
    public $etudes;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $this->etudes = Etude::where('etudes.user_id','=',$this->user_id)->get();
                    //dd($this->etudes);
        
        
    }

    public function creerDemande($etude_id)
    {
         $this->emit('nouvelleDemande',$etude_id);
    }
    
    public function render()
    {
        return view('livewire.dossier.liste-etudes');
    }
}
