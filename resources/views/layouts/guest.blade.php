<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Icon Nav -->
        <link type="image/png" rel="icon" href="{{asset('images/icon.png')}}">
         <!-- Core theme CSS (includes Bootstrap)-->
         <link rel="stylesheet" type="text/css" href="{{asset('css/presentation.css')}}" >

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body >
    <header class="masterhead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <h1 class="text-uppercase text-white font-weight-bold">Fut-Stats - Página De Acceso Al Sistema</h1>
            </div>
        </div>
    </header>
    <!-- <img src="{{url('images/abigail-keenan-8-s5QuUBtyM-unsplash.jpg')}}" alt=""> -->
    <div class="font-sans text-gray-900 antialiased cover">
        
        {{ $slot }}
        
    </div>

    </body>
</html>
