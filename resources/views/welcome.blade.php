@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WeShare</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- iconic icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- font icons -->
    <!-- <script src="https://kit.fontawesome.com/7ab9e52e06.js" crossorigin="anonymous"></script> -->
    <!-- tailwindcss script -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        ion-icon {
            font-size: 30px;
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div id="app">
        <main-component></main-component>
        <!-- <div class="absolute z-111"><i class="fas fa-person"></i>this</div>  -->
        <!-- <i class="fas fa-user"></i> -->
        <!-- <hr>
           <router-link :to='/'>Home</router-link>
           <router-link :to='/about'>About</router-link>
           <hr>
            <router-view></router-view> -->
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
@endsection