<?php

namespace App\Http\Livewire\Demande;

use App\Models\Country;
use App\Models\Etude;
use Livewire\Component;

class InformationsEtudesNouvelleDemandeForm extends Component
{
    public $demande;
    public $user_id;
    public $etude;
    public $type;
    public $country;
    public $school_years;
    public $start_year;
    public $end_year;
    public $school_name;
    public $degree;
    public $step;
    public $etudes;
    public $showForm = false;

   /**public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    public $
    **/

    public $countriesAll;


    public function mount()

    {
        $this->countriesAll = Country::all();
        
    }

    public function showForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function nextStep(){
        
        $this->emit('infoEtudespsOk');
    }

    public function rules() 
    {
        return [
            'country' => 'required',
            'school_years'=>'nullable',
            'start_year'=>'required',
            'end_year'=>'',
            'school_name'=>'',
            'user_id' => ''
        ];
    }

    public function submit(){
       
        $validatedData = $this->validate($this->rules());

   
       
        $this->etude = Etude::create($validatedData); 
       $this->etude->type = $this->etudes;
       $this->etude->save();
       $this->emit('infoEtudespsOk',$this->user_id);
     }

    public function render()
    {

        return view('livewire.demande.informations-etudes-nouvelle-demande-form');
    }
}
