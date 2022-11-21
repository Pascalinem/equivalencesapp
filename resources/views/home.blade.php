@extends('layouts.app')

@section('content')

    <div class="flex flex-wrap mt-10">
            <h2 class="block mb-6 text-xl ">
                Bonjour  <span class=" bolder"> {{ auth()->user()->name }},</span>
            </h2>

            @if (Auth::user()->role_id==5)
                <div class="w-full mx-10 mb-4 bg-white">
                    <h3 class="text-xl">
                        Mon gestionnaire
                        <hr>
                    </h3>
                    bg-blue-200
                </div>
                <div class="w-full mx-10 mb-4 bg-white">
                    <h3 class="text-xl">
                        Mes informations personnelles
                        <hr>
                    </h3>

                </div>
        
            @endif
            <div class="w-full mx-10 mb-4 bg-white">
                
                <h3 class="text-xl">
                        Dossiers de demande
                        <hr>
                </h3>
                <div>
                    
                    @if (Auth::user()->role_id<=2)
                      <div class="mt-6 py-4">
                        <a href="{{ route('liste_demandes') }}" target="_blank">Liste demandes en cours</a>
                      </div>
                    @elseif (Auth::user()->role_id==3)
                         <div class="mt-6 py-4">
                           
                         </div>
                    
                    @elseif (Auth::user()->role_id==4)
                         <div class="mt-6 py-4">
                           
                         </div>
                    @elseif (Auth::user()->role_id==5)
                        <div class="mt-6 py-4">
                            @livewire('dossier.liste-etudes',['user_id' => auth()->user()->id])
                        </div>
                    @endif
                  
                </div>

            </div>

            @if (Auth::user()->role_id<=2) 
                <div class="w-full mx-10 mb-4">
                    <h3 class="text-xl">
                        Liste de gestionnaires
                        <hr>
                    </h3>
                    <div class="my-10">
                       
                    </div>

                </div>
                <div class="w-full mx-10 mb-4 ">
                    <h3 class="text-xl">
                        Liste des utilisateurs
                        <hr>
                    </h3>
                    <div class="my-10">
                        <a href="{{ route('liste_utilisateurs')  }}" target="_blank"> Consulter la liste des utilisateurs </a>
                    </div>

                </div>
            @endif
            <div class="w-full mx-10 mb-4 bg-[#1C3C84] text-white ">
                <h3 class="text-xl ml-2 my-2">
                    Calendrier commissions 
                    <hr>
                </h3>
                <div class="my-10">
                   
                </div>

            </div>




     </div>

   
    @endsection