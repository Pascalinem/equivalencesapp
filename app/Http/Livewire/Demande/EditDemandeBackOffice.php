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
use Illuminate\Support\Facades\Storage;


class EditDemandeBackOffice extends Component
{
    use WithFileUploads;
    
    public $demande;
    public $type_demande;
    public $demande_id;
    public $user_id;
    public $copy_diploma;
    public $certified_copy_diploma;
    public $gestionnaire_id;
    public $commission_id;


    public $equivalences= [

        'NIV'=>'Equivalence de niveau ',
        'ACA'=>'Equivalence academique',

    ];

    public $statuts= [

        '1'=>'En cours ',
        '2'=>'En Attente d\'avis commission ',
        '3'=>'Avis ',
        '4'=>'Clôturé',

    ];
    
    public function mount()
 
     {
        if(isset($this->demande_id)){


            $this->demande = Demande::where('id', '=', $this->demande_id)->first();
            $this->user_id = $this->demande->user_id;
            $this->type_demande = $this->demande->type_demande;
            $this->commission_id = $this->demande->commission_id;
            $this->gestionnaire_id = $this->demande->gestionnaire_id;
            $this->copy_diploma = Storage::get($this->demande->user_id.'/copy_diploma.jpg');
             
        }
        
        $this->gestionnaires = User::where('role_id','=',3)->get();
        $this->commissions = Commission::all();
     }

    public function download(){
        $file= public_path(). $this->demande->user_id.'/copy_diploma.jpg';

        $headers = array(
          'Content-Type: application/jpg',
        );

        return response()->download($file);

    }

    public function rules() 
    {
        return [

            'demande_id'=>'',
            'type_demande'=>'',
            
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
            'gestionnaire_id'=>'',
            'commission_id'=>'',

        ];
    }

     

     public function submit(){

        $validatedData = $this->validate($this->rules());
        // $demande = new Demande; 
        if(isset($this->demande_id)){
         Demande::find($this->demande_id)->update($validatedData);
         $test = $this->copy_diploma->storeAs('/public/'.$this->user_id, 'copy_diploma.jpg');
         
         //$document = DocumentDemande::findOrCreate('demande_id','=',$this->demande_id)->get();
         //$document->copy_diploma = 
         
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
        }
       
     }
    
    public function render()
    {
        return view('livewire.demande.edit-demande-back-office');
    }
}
