@extends('layouts.app')

@section('content')
    <div class=" mt-10">
        <h2 class="block ml-4 mb-8 text-2xl text-gray-700">
            <span class="font-extrabold"> Vos notifications</span>
        </h2>
        
        <ul class="block ml-8 mb-2">
        @foreach (auth()->user()->unreadNotifications as $notification)
                        <li>
                        <a href="#" class="text-success"><li class="p-1 text-success"> {{$notification->data['data']}}</li></a>
                        </li>
                        @endforeach
                        
                        @foreach (auth()->user()->readNotifications as $notification)
                        <li>
                        <a href="#" class="text-secondary"><li class="p-1 text-secondary"> {{$notification->data['data']}}</li></a>
                        </li>
                        @endforeach
        </ul>
    </div>
@endsection