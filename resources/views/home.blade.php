@extends('layouts.app')

@section('content')

    <div class="flex flex-wrap mt-10">
            <h2 class="block ml-4 mb-8 text-2xl text-gray-700">
                <span class="  font-extrabold"> {{ __('messages.welcome') }}   {{ auth()->user()->name }},</span>
            </h2>

            @if (Auth::user()->role_id==5)
                
                <div class="w-full mx-10 mb-4 bg-white">
                    <h3 class="font-bold bg-neutral-100 text-xl">
                        {{ __('messages.info-perso') }}
                        <hr>
                    </h3>
                    <div class="w-full my-4 ">
                            <!--div info utilisateur-->  
                            <div class="grid grid-cols-3 gap-4">
                                <div><span class="font-bold text-gray-600 ">{{ __('messages.name-firstname') }} </span> {{ auth()->user()->name }} {{ auth()->user()->firstname }}</div>
                                <div><span class="font-bold text-gray-600 ">{{ __('messages.name-diploma') }}</span> {{ auth()->user()->name_diploma }}</div>
                                <div><span class="font-bold text-gray-600 ">{{ __('messages.email-phone') }}</span> {{ auth()->user()->email }}      {{ auth()->user()->telephone }}</div>
                                <div><span class="font-bold text-gray-600 ">{{ __('messages.adresse') }}</span> {{ auth()->user()->street }}   {{ auth()->user()->postal_code }} {{ auth()->user()->city }} {{ auth()->user()->country }}</div>
                                <div><span class="font-bold text-gray-600 "> Adresse courrier, si différente adresse résidence: </span> {{ auth()->user()->stree1 }}   {{ auth()->user()->postal_code1 }} {{ auth()->user()->city1 }} {{ auth()->user()->country1 }}</div>
                            </div>

                           
                      </div>
                      <button class="bg-white hover:bg-blue-400 text-gray-800 font-semibold mt-8 py-2 px-4 border border-gray-400 rounded shadow"><a href="/create">Modifier vos informations personnelles </a></button>

                </div>
        
            
                <div class="w-full mx-10 mb-4 bg-white">
                    
                    <h3 class=" font-bold text-xl bg-neutral-100">
                            Etudes
                            <hr>
                    </h3>
                    <div>                
                
                            <div class="mt-6 py-4">
                                @livewire('dossier.liste-etudes',['user_id' => auth()->user()->id])
                                <div>@livewire('demande.edit-demande',['user_id' => auth()->user()->id])</div>
                            </div>
                
                    
                    </div>

                </div>
            @endif

            @if (Auth::user()->role_id<=2) 

                <div class="w-full mx-10 mb-4 ">
                    <h3 class="font-bold text-xl">
                        Liste des utilisateurs
                        <hr>
                    </h3>
                    <div class="my-10">
                        <a href="{{ route('liste_utilisateurs')  }}" target="_blank" class="text-blue-600"> Consulter la liste des utilisateurs </a>
                    </div>

                </div>
            @endif
            <div class="w-full mx-10 mb-4  ">
                <h3 class="font-bold text-xl ml-2 my-2 bg-neutral-100">
                    Calendrier commissions 
                    <hr>
                </h3>
                <div class="my-10 mx-20">
                    @livewire('seance-commission-datatable')
                </div>

            </div>




     </div>

   
    @endsection