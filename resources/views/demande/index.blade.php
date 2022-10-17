@extends('layouts.app')
@section('content')
<h2> Liste de vos demandes d'équivalence</h2> 
    @foreach ($demandes as $demande)
        <h3><a href='#'>{{ $demande->id }}</a></h3>    
    @endforeach
   
@endsection