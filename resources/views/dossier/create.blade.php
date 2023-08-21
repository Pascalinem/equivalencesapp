@extends('layouts.app')

@section('content')

<div>
    @if(isset($step))
    @livewire('dossier.nouveau-dossier',['step' => $step ])
    @else
    @livewire('dossier.nouveau-dossier',['step' => 1 ])

    @endif
</div>
@endsection