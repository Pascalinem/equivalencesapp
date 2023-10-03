<?php

namespace App\Http\Livewire\Dossier;

use Livewire\Component;

class ChoixEtudes extends Component
{
    public $type_etude;
    public $user_id;

    public function mount(){
        $this->user_id = auth()->user()->id;
    }

    public function updatedTypeEtude(){
        if($this->type_etude>1)
        {
            $this->emit('setStep',$this->type_etude);
        }
    }
    
    public function render()
    {
        return view('livewire.dossier.choix-etudes');
    }
}
