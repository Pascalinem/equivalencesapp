@extends('layouts.app')

@section('content')

<div> @livewire('dossier.liste-etudes',['user_id' => $user_id]) </div>
<div>@livewire('demande.edit-demande',['user_id' => $user_id])</div>

@endsection