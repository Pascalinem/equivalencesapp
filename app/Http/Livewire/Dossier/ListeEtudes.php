<?php

namespace App\Http\Livewire\Dossier;

use App\Models\User;
use App\Models\Etude;
use App\Models\Demande;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;
use App\Http\Livewire\Demande\NouveauDossier;

class ListeEtudes extends Component
{
    

    
    public $user_id;
    public $etudes;
    public $liste_etudes;

    protected $listeners = ['refreshComponent' => 'mount'];

    public function mount()
    {
        $this->liste_etudes = 1;
        $this->etudes = Etude::select(  'etudes.id AS etudes_id',
                                        'etudes.type',
                                        'etudes.school_name', 
                                        'etudes.country', 
                                        'etudes.school_years',
                                        'etudes.start_year',
                                        'etudes.end_year',
                                        'etudes.demande_id',
                                        'demandes.statut_demande',
                                        'users.name', 
                                        'users.email')
                        ->where('etudes.user_id','=',$this->user_id)
                        ->leftjoin('demandes','demandes.id','=','etudes.demande_id')
                        ->leftjoin('users','users.id','=','demandes.gestionnaire_id')->get();
                    //dd($this->etudes);
        
        
    }

    public function creerDemande($etude_id)
    {
        $this->liste_etudes = 0; 
        $this->emit('nouvelleDemande',$etude_id);
    }

    public function ajouterEtudes()
    {
        return Redirect::route('choix-etudes',['user_id' => $this->user_id]);
    }
  
    
    public function render()
    {
        return view('livewire.dossier.liste-etudes');
    }
}
