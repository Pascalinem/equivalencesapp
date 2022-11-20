<div class="text-2xl mb-10 py-6 bg-gray-300"  style="background-color:#FCB434  ;">
<ul> 
   
    <li class="inline mx-4"><a href="#">Accueil</a></li>
    
    <li class="inline"><a href=''>test</a></li>

</ul>
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
</div>