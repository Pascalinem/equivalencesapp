<?php

namespace App\Http\Controllers;

use App\Models\Etude;
use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DemandeResource;
use App\Http\Resources\DemandeCollection;
class DemandeController extends Controller
{

    /**
     * @return \illuminate\Http\Response
     */
    public function index(){
        $demandes=Demande::all();
        return view('components.index',[
          'demandes'=>$demandes,
           'resource'=>'demandes'
        ]);
     
     }

    public function indexAPI(){
               return new DemandeCollection(Demande::paginate());
      
    }

    //
    public function show($id){
        $etude=Etude::where('demande_id','=',$id)->first();
        $demande=Demande::find($id) ?? 'Aucune demande correspond à ce numéro';
        return view('demande.edit',[
            'demande'=>$demande,
            'etude'=>$etude,
        ]);
    }

    public function showAPI($id){
        $etude=Etude::where('demande_id','=',$id)->first();
        $demande=Demande::find($id) ?? 'Aucune demande correspond à ce numéro';
        return new DemandeResource($demande);
        
    }
 
    
    public function notifications(){

        
        return view('notification');
    }
    


    public function contact(){
    
            return view('contact');

    } 


}
