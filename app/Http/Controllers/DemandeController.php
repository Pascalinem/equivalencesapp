<?php

namespace App\Http\Controllers;

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
        $demande=Demande::find($id) ?? 'Aucune demande correspond à ce numéro';
        return view('demande.show',[
            'demande'=>$demande,
        ]);
    }

    public function contact(){
    
            return view('contact');

    } 


}
