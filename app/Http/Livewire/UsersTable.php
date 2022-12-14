<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

use WithPagination;


public string $search= '';



protected $queryString=[
 'search'=>['except'=>'']
];




    public function render()
    {
        return view('livewire.users-table',[
            'users'=>User::where('name','LIKE',"%{$this->search}%")   
            ->get() 
             
    
        ]);
    }
}
