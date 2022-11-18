<?php

namespace App\Http\Livewire\Demande;

use App\Models\Country;
use App\Models\Etude;
use Livewire\Component;

class InformationsEtudesNouvelleDemandeForm extends Component
{
    public $country_primary_education;
    public $primary_school_years;
    public $start_year_primary_school;
    public $end_year_primary_school;
    public $primary_school_name;
    public $primary_school_degree;

    public $secondaryTrue;

    public $country_secondary_education;
    public $secondary_school_years;
    public $start_year_secondary_school;
    public $end_year_secondary_school;
    public $secondary_school_name;
    public $SecondarySchoolLocality;
    public $secondary_school_degree;
    public $secondaryOtherInformation;
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
    public $
    **/

    public $countriesAll;


    public function mount()

    {
        $this->countriesAll = Country::all();

    }



    public function submit(){

        $validatedData = $this->validate([
        
            
        ]);
   
       Etude::create($validatedData);
   
        return redirect()->to('/');
     }

    public function render()
    {
        return view('livewire.demande.informations-etudes-nouvelle-demande-form');
    }
}
