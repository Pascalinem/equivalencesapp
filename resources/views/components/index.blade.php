@extends('layouts.app')
@section('content')
<div>
    @if (!isset($demandes))
    Aucune demande introduite.
  @else

      <table class="table">
        <thead class="bg-[#1c3c82] text-white">
          <tr>
              <th scope="col"> Type Demande</th>
              <th scope="col"> Nom demandeur</th>
              <th scope="col"> Téléphone demandeur</th>
              <th scope="col"> e-mail demandeur</th>
              <th scope="col"> statut demande</th>
              <th scope="col"> Commission en charge de la demande</th>
              <th scope="col"> Type d'études</th>
              <th scope="col"> Date demande</th>
              <th scope="col"> </th>
          </tr>

        </thead>
        <tbody>
          
          @foreach ($demandes as $demande)

          <tr>
              <td> {{  $demande->type_demande}}</td>
              <td> {{  $demande->user->name}}</td>
              <td> {{  $demande->user->telephone}}</td>
              <td> {{  $demande->user->email}}</td>
              <td> {{  $demande->statut_demande}}</td>
              <td> {{  $demande->commission->name}}</td>
              <td> {{  $demande->etude->type}}</td>
              <td> {{  $demande->date_demande}}</td>

          </tr>

          @endforeach
          <tbody>


      </table>
   @endif




</div>
@endsection
