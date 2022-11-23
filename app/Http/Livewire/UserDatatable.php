<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatable extends LivewireDatatable
{

    public $exportable = true;  


    
    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->searchable()
                ->hideable()
                ->linkTo('liste_utilisateurs', 6),

            Column::name('national_number')
                ->label('Numéro  National')
                ->searchable()
                ->hideable()
                ->filterable(),

           
            Column::name('name')
                ->label('Nom(s)')
                ->searchable()
                ->hideable()
                ->filterable(),

                Column::name('firstname')
                ->label('Prénom(s)')
                ->searchable()
                ->hideable()
                ->filterable(),

           
        ];
    }
}