<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Demande;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DemandeDatatable extends LivewireDatatable
{
    public function builder()
    {
        return Demande::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->searchable()
                ->hideable()
                ->linkTo('demandes', 6),

            Column::name('type_demande')
                ->label('Type demande')
                ->searchable()
                ->hideable()
                ->filterable(),

            Column::name('etude.type')
                ->label('Etudes')
                ->searchable()
                ->hideable()
                ->filterable(),

           
            Column::name('user.name')
                ->label('Nom(s)')
                ->searchable()
                ->hideable()
                ->filterable(),

            Column::name('user.firstname')
            ->label('Prenom(s)')
            ->searchable()
            ->hideable()
            ->filterable(),
            
            Column::name('date_demande')
            ->label('Date introduction demande')
            ->searchable()
            ->hideable()
            ->filterable(),

            Column::name('gestionnaire.name')
            ->label('Gestionnaire')
            ->searchable()
            ->hideable()
            ->filterable($this->gestionnaire),

            Column::name('statut_demande')
            ->label('Statut demande')
            ->searchable()
            ->hideable()
            ->filterable(),

            Column::name('commission_id')
            ->label('Commission')
            ->searchable()
            ->hideable()
            ->filterable(),



           

           
        ];
    }

    public function getGestionnaireProperty()
    {
        return User::where('role_id','=', '3')->pluck('name');
    }
}