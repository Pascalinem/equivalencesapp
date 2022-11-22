<?php

namespace App\Http\Controllers;

use App\Models\Etude;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

    public function index(){
        $demandes=Demande::all();
        return view('components.index',[
            'demandes'=>$demandes,
            'resource'=>'demandes'
        ]);
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

    


    public function contact(){
    
            return view('contact');

    } 


}
