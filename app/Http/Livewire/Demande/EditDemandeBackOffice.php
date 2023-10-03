<?php

namespace App\Http\Livewire\Demande;

use App\Models\User;
use App\Models\Etude;
use App\Models\Demande;
use Livewire\Component;
use App\Models\Commission;
use Illuminate\Http\Response;
use Livewire\WithFileUploads;
use App\Models\DocumentDemande;
use App\Notifications\DossierAvis;
use App\Notifications\DossierStatut;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class EditDemandeBackOffice extends Component
{
    use WithFileUploads;
    
    public $demande;
    public $type_demande;
    public $demande_id;
    public $statut_demande='';
    public $user_id;
    //
    public $copy_diploma;
    public $certified_copy_diploma;
    public $copy_transcripts_of_records;
    public $certified_copy_transcripts_of_records;
    public $copy_dissertation;
    public $copy_study_program;
    public $summary_dissertation;
    public $copy_work_attestations;
    public $other_document;
    
    public $gestionnaires;
    public $gestionnaire_id;
    public $commissions;
    public $commission_id;
    public $commentaire;
    public $equivalences= [

        'NIV'=>'Equivalence de niveau ',
        'ACA'=>'Equivalence academique',

    ];

    public $statuts= [

        '1'=>'En cours ',
        '2'=>'En Attente avis commission ',
        '3'=>'Avis ',
        '4'=>'Decision',

    ];
    
    public function mount()
 
     {
        if(isset($this->demande_id)){


            $this->demande = Demande::where('demandes.id', '=', $this->demande_id)->first();
            $this->user_id = $this->demande->user_id;
            $this->statut_demande= $this->demande->statut_demande;
            $this->type_demande = $this->demande->type_demande;
            $this->commission_id = $this->demande->commission_id;
            $this->gestionnaire_id = $this->demande->gestionnaire_id;
            $this->commentaire = $this->demande->commentaire;

            $this->copy_diploma = Storage::get($this->demande->user_id.'/copy_diploma.jpg');
            $this->certified_copy_diploma= Storage::get($this->demande->user_id.'/certified_copy_diploma.jpg');
            $this->copy_transcripts_of_records= Storage::get($this->demande->user_id.'/copy_transcripts_of_records.jpg');
            $this->certified_copy_transcripts_of_records= Storage::get($this->demande->user_id.'/certified_copy_transcripts_of_records.jpg');
            $this->copy_dissertation= Storage::get($this->demande->user_id.'/copy_dissertation.jpg');
            $this->copy_study_program= Storage::get($this->demande->user_id.'/copy_study_program.jpg');
            $this->summary_dissertation= Storage::get($this->demande->user_id.'/summary_dissertation.jpg');            
            $this->copy_work_attestations= Storage::get($this->demande->user_id.'/copy_work_attestations.jpg');
            $this->other_document= Storage::get($this->demande->user_id.'/other_document.jpg');
             
        }
        
        $this->gestionnaires = User::where('role_id','=',3)->get();
        $this->commissions = Commission::all();
     }

    public function download(){
        $file= public_path(). $this->demande->user_id.'/copy_diploma.jpg';

        $headers = array(
          'Content-Type: application/jpg',
          'Content-Type: application/pdf',
        );

        return response()->download($file);

    }

    public function rules() 
    {
        return [

            'demande_id'=>'',
            'type_demande'=>'',
            'statut_demande'=>'required',
            //  'identity_card'=>'',
            'copy_diploma'=>'',
            'certified_copy_diploma'=>'',
            'copy_transcripts_of_records'=>'',
            'certified_copy_transcripts_of_records'=>'',
            'copy_dissertation'=>'',
            'copy_study_program'=>'',
            'summary_dissertation'=>'',
            'copy_work_attestations'=>'',
            'other_document'=>'',
            'gestionnaire_id'=>'',
            'commission_id'=>'',
            'commentaire'=>'',
        ];
    }

     

     public function submit(){
        $validatedData = $this->validate($this->rules());
        // $demande = new Demande; 
        
         $this->demande->update($validatedData);
         User::find($this->demande->user_id)->notify(new DossierStatut($this->demande));
         return redirect()->route('liste_demandes');
        
         //$test = $this->copy_diploma->storeAs('/public/'.$this->user_id, 'copy_diploma.jpg');
         
         //$document = DocumentDemande::findOrCreate('demande_id','=',$this->demande_id)->get();
         //$document->copy_diploma = 
         
        
     }
    
    public function render()
    {
        return view('livewire.demande.edit-demande-back-office');
    }
}
