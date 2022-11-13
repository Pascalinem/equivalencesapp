<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    
    @section('content')
        <div class="field my-4 ">
                <p class="my-4 ml-10 control has-icons-left has-icons-right">
                    <input class="input" type="name" placeholder="Rechercher un demandeur" wire:model="search">
                    <span class="icon is-small is-left">
                         <ion-icon name="search"></ion-icon>
                    </span>
                </p>
                
        </div>
       
        <table class="ml-10 mt-10 ">
            <thead class="my-2">
                <tr>
                    {{-- <th>Numéro dossier</th> --}}
                    <th  class="ml-4"  >Numéro national</th>
                    <th  class="ml-4"  >Nom</th>
                    <th  class="ml-4">Prénom</th>
                    <th class="ml-4" >Adresse mail</th>
                    <th  class="ml-4"  >Role</th>
                   {{-- <th>Type demande</th>--}}
                    {{--<th>statut</th>--}}
                   {{-- <th>Dossier introduit le </th>--}}
                   <th> </th>
                </tr>
            </thead>
     <tbody>
         @foreach ($users as $user)
                    
            <tr>
             {{--  <td>
                {{ $user->id }}
              </td> --}}
              <td  class="ml-4">{{ $user->numero_national }}</td>
              <td  class="ml-4">{{ $user->name }}</td>
              <td  class="ml-4">{{ $user->firstname }}</td>
              <td class="ml-4">{{ $user->email}}</td>
              <td  class="ml-4">{{ $user->role->name}}</td>
             {{-- <td>{{ $user->type_demande }}</td>--}}
               {{--<td>{{ $user-> }}</td>--}}
              {{-- <td>{{ $user-> }}></td>--}}
              <td  ><button  style="background-color:#1c3c82 ;" class="button rounded text-white ml-4 p-2 ">Editer</button></td>
            </tr>
         @endforeach
            <tbody>
           
        </table>
       
</div>
