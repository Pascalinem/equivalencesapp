@extends('layouts.app')

@section('content')

<div class="w-full">
                
    @livewire('user-datatable',['user_id' => auth()->user()->id])
   
</div>
@endsection
