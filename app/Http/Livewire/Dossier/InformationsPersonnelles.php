<?php

namespace App\Http\Livewire\Dossier;

use App\Models\User;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class InformationsPersonnelles extends Component
{
    public $user;
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
    public $role_id;
    public $refugee;
    public $actiris;
    public $vdab;
    public $countriesAll;
    public $adresseCourrier = false;


     public function mount()
 
     {
        $this->countriesAll = Country::all();
        
        //à faire adapter multi role
        $this->user = User::where('id','=',Auth::user()->id)->first();
        $this->national_number = $this->user->national_number;
        $this->name = $this->user->name;
        $this->name_diploma = $this->user->name_diploma;
        $this->firstname = $this->user->firstname;
        $this->street = $this->user->street;
        $this->postal_code = $this->user->postal_code;
        $this->city = $this->user->city;
        $this->country = $this->user->country;
        $this->street1= $this->user->street1;
        $this->postal_code1 = $this->user->postal_code1;
        $this->city1 = $this->user->city1;
        $this->country1 = $this->user->country1;
        $this->email = $this->user->email;
        $this->street1= $this->user->street1;
        
        $this->telephone= $this->user->telephone;
        $this->gender= $this->user->gender;
        $this->date_of_birth= $this->user->date_of_birth;
        $this->place_of_birth= $this->user->place_of_birth;
        $this->country_of_birth = $this->user->country_of_birth;
        $this->nationality = $this->user->nationality;
        $this->refugee = $this->user->refugee;
        $this->actiris = $this->user->actiris;
        $this->vdab = $this->user->vdab;
    




 
     }
 
 
     public function showAdresseCourrier(){
        $this->adresseCourrier = !$this->adresseCourrier;
     }
     

     public function submit(){

        $validatedData = $this->validate([
       'national_number'=>'nullable',
        'name' => 'required',
        'name_diploma'=>'nullable',
        'firstname'=>'nullable',
        'street'=>'',
        'postal_code'=>'',
        'city'=>'',
        'country'=>'',
        'street1'=>'',
        'postal_code1'=>'',
        'city1'=>'',
        'country1'=>'',
        //'email'=> 'required|email',
        'telephone'=> 'nullable',
        'gender'=> 'nullable',
        'date_of_birth'=> 'nullable',
        'place_of_birth'=> 'nullable',
        'country_of_birth'=> 'nullable',
        'nationality'=> 'nullable',
        //à gérer
        
       //'password'=>'required',

            
        ]);
        $this->user->update($validatedData);
        
       
        $this->user->save();
       $this->emit('infoPersoOk', $this->user->id);
     }
    
    public function render()
    {
        return view( 'livewire.dossier.informations-personnelles');
    }
}
