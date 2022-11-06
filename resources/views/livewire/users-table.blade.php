<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    
    @section('content')
        <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="name" placeholder="Rechercher un demandeur">
                    <span class="icon is-small is-left">
                         <ion-icon name="search"></ion-icon>
                    </span>
                </p>
        </div>

        <table>
            <thead>
                <tr>
                    {{-- <th>Numéro dossier</th> --}}
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse mail</th>
                    <th>Role</th>
                   {{-- <th>Type demande</th>--}}
                    {{--<th>statut</th>--}}
                   {{-- <th>Dossier introduit le </th>--}}
                   <th> </th>
                </tr>
            </thead>
     <tbody>
         @foreach ($users as $user)
                    
            <tr>
              <td>
                {{ $user->id }}
              </td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->role->name}}</td>
             {{-- <td>{{ $user->type_demande }}</td>--}}
               {{--<td>{{ $user-> }}</td>--}}
              {{-- <td>{{ $user-> }}></td>--}}
              <td><button class="button">Editer</button></td>
            </tr>
         @endforeach
            <tbody>
           
        </table>
</div>
