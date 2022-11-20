<?php

namespace App\Http\Livewire\Demande;

use App\Models\Etude;
use App\Models\Demande;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentDemande;

class EditDemande extends Component
{

use WithFileUploads;

    public $showDemande=false;
    public $demande_id;
    public $user_id;
    public $type_demande;
    public $documentDemande;
    //  'identity_card'=>'',
    public $copy_diploma;
    public $certified_copy_diploma;
    // 'copy_transcripts_of_records',
    // 'certified_copy_transcripts_of_records',
    // 'copy_dissertation',
    //  'copy_study_program',
    // 'summary_dissertation',
    // 'copy_work_attestations',
    // 'other_document'
    public $etude_id;

   


    protected $listeners = ['nouvelleDemande'=>'showNouvelledemande'];




    public $equivalences= [

        'NIV'=>'Equivalence de niveau ',
        'ACA'=>'Equivalence academique',

    ];


    public function rules() 
    {
        return [

            'demande_id'=>'',
            'user_id'=>'',
            'type_demande'=>'',
            'documentDemande'=>'',
          //  'identity_card'=>'',
            'copy_diploma'=>'',
            'certified_copy_diploma'=>'',
           // 'copy_transcripts_of_records',
           // 'certified_copy_transcripts_of_records',
           // 'copy_dissertation',
          //  'copy_study_program',
           // 'summary_dissertation',
           // 'copy_work_attestations',
           // 'other_document'
           'etude_id'=>''

        ];
    }


public function showNouvelledemande($etude_id){

    $this->etude_id = $etude_id;
    $this->showDemande=true;

}

public function submit(){

    $validatedData = $this->validate($this->rules());

//dd($validatedData);




      

        $validatedData['copy_diploma'] = $this->copy_diploma->store($this->user_id, 'public');
       // $demande = new Demande; 
        $demande=Demande::create($validatedData);
        $demande->user_id = $this->user_id;
        $demande->date_demande = now();
        $demande->etude_id = $this->etude_id;
        $demande->save();
        $etude = Etude::where('id', '=', $this->etude_id)->first();
        $etude->demande_id = $demande->id;
        $etude->save();
        $this->emit('refreshComponent');
        $this->showDemande = false;
}


    public function render()
    {
        return view('livewire.demande.edit-demande');
    }
}
