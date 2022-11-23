<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Query\Builder;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SeanceCommissionDatatable extends LivewireDatatable
{
    
    public $exportable = true;
   

    public function builder()
    {
        $commissions = User::query()
        ->join('seance_commission', 'users.id','=','membre_commission_id')
        ->join('commissions', 'commissions.id','=','commission_id');


        return $commissions;
    }

    public function columns()
    {
        return [
            NumberColumn::name('commissions.name')
                ->label('Commission')
                ->searchable()
                ->hideable()
                ->linkTo('liste_utilisateurs', 6),

           DateColumn::name('seance_commission.date_seance')
                ->label('Date Séance')
                ->searchable()
                ->hideable()
                ->filterable(),
        ];
    }
}