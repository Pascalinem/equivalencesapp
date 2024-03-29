<?php

namespace App\Http\Livewire\Demande;

use App\Models\User;
use App\Models\Etude;
use App\Models\Demande;
use App\Notifications\DossierAvis;
use App\Notifications\DossierIncomplet;
use App\Notifications\DossierComplet;
use App\Notifications\DossierPaiement;
use App\Notifications\DossierDecision;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentDemande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditDemande extends Component
{

use WithFileUploads;

    public $user;
    public $showDemande;
    public $demande;
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
    public $etude;
    public $etude_id;
    public $gestionnaire_id;

    protected $listeners = ['nouvelleDemande'=>'showNouvelledemande'];

    public $equivalences= [

        'NIV'=>'Equivalence de niveau ',
        'ACA'=>'Equivalence academique',
    ];

    public function mount()
 
     {
        if(isset($this->demande_id)){
            $this->demande = Demande::where('id', '=', $this->demande_id)->join('users','users.id','=','demandes.user_id');
            $this->type_demande = $this->demande->type_demande ;
            $this->showDemande = true;
            $this->user_id = $this->demande->user_id;
        }
        //adapter multi role
       
       

     }


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
           'etude_id'=>'',
           'gestionnaire_id'=>'',

        ];
    }


public function showNouvelledemande($etude){

    $this->etude = $etude;
    
    $this->etude_id = $etude['etudes_id'];
    $this->showDemande=true;

}

public function submit(){

    $validatedData = $this->validate($this->rules());

//dd($validatedData);

      

        $validatedData['copy_diploma'] = $this->copy_diploma->store($this->user_id, 'public');
       // $demande = new Demande; 
       if(isset($this->demande_id)){
            if($this->statut_demande ==='Avis'){
                User::find(Auth::user()->id)->notify(new DossierAvis($this->statut_demande));
            }
            elseif($this->statut_demande ==='Decision'){

            }
            else{

            }
           
       }
       else{
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
       

       return redirect()->back()->with('status','There\'s a new review for your file.');
}
public function markAsRead(){
    Auth::user()->unreadNotifications->markAsRead();
    return redirect()->back();
}



    public function render()
    {
        return view('livewire.demande.edit-demande');
    }
}
