<?php

namespace App\Http\Livewire\Demande;

use App\Models\User;
use App\Models\Country;
use Livewire\Component;

class InformationsPersonnellesNouvelleDemandeForm extends Component
{
    public $national_number;
     public $name;
     public $name_diploma;
     public $firstname;
    //données résidence
     public $street;
     public $postal_code;
     public $city;
     public $country;
    //données courrier
     public $street1;
     public $postal_code1;
     public $city1;
     public $country1;

     public $email;
     public $telephone;
     public $gender;
     public $date_of_birth;
     public $place_of_birth;
     public $country_of_birth;
     public $nationality;

     public $refugee;
     public $actiris;
     public $vdab;

     //à gérer
     public $role_id= 4;
     public $password='test';

     public $countriesAll;


     public function mount()
 
     {
         $this->countriesAll = Country::all();
 
     }
 
 
 
     

     public function submit(){

        $validatedData = $this->validate([
        'national_number'=>'nullable',
        'name' => 'required',
        'name_diploma'=>'nullable',
        'firstname'=>'required',
        'street'=>'',
        'postal_code'=>'',
        'city'=>'',
        'country'=>'',
        'street1'=>'',
        'postal_code1'=>'',
        'city1'=>'',
        'country1'=>'',
        'email'=> 'required|email',
        'telephone'=> 'required',
        'gender'=> 'required',
        'date_of_birth'=> 'required',
        'place_of_birth'=> 'required',
        'country_of_birth'=> 'required',
        'nationality'=> 'required',
        //à gérer
        'role_id'=>'required',
        'password'=>'required',

            
        ]);
   
       User::create($validatedData);
   
        return redirect()->to('/demande.create-etudes-primaire-secondaire');
     }
    
    public function render()
    {
        return view( 'livewire.demande.informations-personnelles-nouvelle-demande-form');
    }
}
