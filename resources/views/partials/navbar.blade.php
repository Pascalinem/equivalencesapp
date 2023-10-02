<div class="text-2xl mb-10 py-6 bg-[#FCB434] text-teal-800">
<ul> 
   
    
  
    @if (Auth::user())
        @if (Auth::user()->role_id==4)
            
        @else
            <li class="inline mx-4"><a href="{{ route('home') }}">{{__('messages.accueil') }}</a></li>
            @if(Auth::user()->role_id<4)
              <li class="inline mx-4"><a href="{{ route('liste_utilisateurs') }}">{{__('messages.utilisateurs') }}</a></li>
              <li class="inline mx-4"><a href="{{ route('liste_demandes') }}">{{__('messages.demandes') }}</a></li>
            @endif
            <li class="inline mx-4"><a href="#">Notifications</a></li>
            
            

        @endif
    @endif
    
 

</ul>

@php $locale = session()->get('locale'); @endphp

<div class="relative inline-block text-right">
    <div>
      <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-teal-800 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-teal-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
        Lang
        <svg class="-mr-1 h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
  
    <!--
      Dropdown menu, show/hide based on menu state.
  
      Entering: "transition ease-out duration-100"
        From: "transform opacity-0 scale-95"
        To: "transform opacity-100 scale-100"
      Leaving: "transition ease-in duration-75"
        From: "transform opacity-100 scale-100"
        To: "transform opacity-0 scale-95"
    -->
    
    <div class=" right-0 z-10 mt-2 origin-top-left rounded-md bg-teal-800 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div  role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="./lang/fr" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">FR</a>
        <a href="./lang/en" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">EN</a> 
      </div>
    </div>
  </div>
  




<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
       
        <div class="nav-link text-sm hover:underline" id="nav-bar-logoutbutton">                       
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-secondary btn-sm" type="submit">{{ __('auth.logout') }}</button>
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