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

    public function indexAPI(){
        $demandes=Demande::all();
        return response()->json($demandes);
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
        return response()->json($demande);
    }

    

    


    public function contact(){
    
            return view('contact');

    } 


}
