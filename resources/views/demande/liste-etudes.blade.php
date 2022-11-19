@extends('layouts.app')

@section('content')

<div> @livewire('demande.liste-etudes',['user_id' => $user_id]) </div>

@endsection