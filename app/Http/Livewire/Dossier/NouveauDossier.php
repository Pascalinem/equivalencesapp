<?php

namespace App\Http\Livewire\Dossier;

use App\Models\Demande;
use Livewire\Component;

class NouveauDossier extends Component
{
public $userId;    
public $step = 1;
public $etudes = [
    '2' => "primaires",
    '3' => "secondaires",
    '4' => "supérieures",
];


    protected $listeners = ['infoPersoOk'=> 'goStepTwo','infoEtudespsOk'=> 'goNextStep' ];

    public function goNextStep($userId){
       
        
        $this->step++;
    }

    public function goStepTwo($userId){
        $this->userId = $userId;

        $this->step = 2;
    }
    public function goStepThree(){

        $this->step = 3
        ;
    }

  

    public function render()
    {
        return view('livewire.dossier.nouveau-dossier');
    }
}
