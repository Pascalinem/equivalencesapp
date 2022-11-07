<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Equivalence des diplômes</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>

    <body>
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
  
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
        @livewireScripts
    </body>

</html> 