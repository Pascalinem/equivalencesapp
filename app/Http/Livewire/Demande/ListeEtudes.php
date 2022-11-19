<?php

namespace App\Http\Livewire\Demande;

use App\Models\User;
use App\Models\Etude;
use App\Models\Demande;
use Livewire\Component;

class ListeEtudes extends Component
{
    
    
    public $user_id;
    public $etudes;

    public function mount()
    {
        $this->etudes = Etude::where('user_id','=',$this->user_id)->get();
        
        
    }

    public function creerDemande($id)
    {
        $demande = new Demande;
        $demande->user_id = $this->user_id;
        $demande->date_demande = now();
        $demande->etude_id = $id;
        $demande->save();
    }
    
    public function render()
    {
        return view('livewire.demande.liste-etudes');
    }
}
