@extends('layouts.app')
@section('content')
<h2> Demande {{ demande }}</h2> 
    @foreach ($demandes as $demande)
        <h3>{{ $demande }}</h3>    
    @endforeach
   
@endsection