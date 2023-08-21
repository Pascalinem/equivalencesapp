<div class="text-2xl mb-10 py-6 bg-[#FCB434] text-teal-800">
<ul> 
   
    
  
    @if (Auth::user())
        @if (Auth::user()->role_id==4)
            
        @else
            <li class="inline mx-4"><a href="{{ route('home') }}">Accueil</a></li>
            @if(Auth::user()->role_id<4)
              <li class="inline mx-4"><a href="{{ route('liste_utilisateurs') }}">Utilisateurs</a></li>
              <li class="inline mx-4"><a href="{{ route('liste_demandes') }}">Demandes</a></li>
            @endif
            <li class="inline mx-4"><a href="#">Notifications</a></li>
            
            

        @endif
    @endif
    
 

</ul>

@php $locale = session()->get('locale'); @endphp

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        @switch($locale)
            @case('en')
            EN
            @break
            
            @default
            BLA
        @endswitch
        <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="./lang/en"> EN</a>
        <a class="dropdown-item" href="./lang/fr"> FR</a>
    </div>
</li>
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
       
        <div class="nav-link text-sm hover:underline" id="nav-bar-logoutbutton">                       
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-secondary btn-sm" type="submit">Logout</button>
            </form>
        </div>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>

</div>