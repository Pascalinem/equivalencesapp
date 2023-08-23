<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DemandeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name'=>$this->user->name,
            'firstname'=>$this->user->firstname,
            'nationalNumber'=>$this->user->national_number,
            'typeDemande'=>$this->type_demande,
            //'type_etude'=>$this->user->etudes,
            'statutDemande'=>$this->statut_demande,
            'actiris'=>$this->actiris,
            'dateDemande'=>$this->date_demande,
            //'etude_id'=>$this->etude_id,
            //'decision'=>$this->
           
        ];
    }
}
