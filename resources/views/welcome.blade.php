<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'UGMA - Odontología') }}</title>
    <link rel="icon" href="public/img/UGMA-logo.png" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div>
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif
</div>
<div class="flex justify-center items-center h-screen">
    <div class="flex h-fit">
        <img class="w-96 rounded-md" src="{{asset('img/home-picture.jpg')}}"/>
        <div class="border border-solid border-gray-400 mx-14"></div>
        <div class="flex flex-col rounded-md w-96 border border-slate-200 p-8 space-y-4 justify-center">
            <div class="size-24 mx-auto">
            <x-application-logo />

            </div>
            <h1 class="text-lg font-black text-center uppercase">UGMA<br>Facultad de Odontología</h1>
            <h2 class="text-lg font-black">Acceso</h2>
            <div class="flex flex-col space-y-4 justify-center">

            <a class="text-center border rounded-md border border-slate-200 p-2" href="{{ route('login') }}">Estudiante | Profesor</a>
            <a class="text-center border rounded-md border border-slate-200 p-2" href="{{ route('admin.login') }}">Admisión</a>
            <a class="text-center border rounded-md border border-slate-200 p-2" href="{{ route('admin.login') }}">Administración</a>
            <a class="text-center border rounded-md border border-slate-200 p-2 bg-cyan-500 text-white" href="{{ route('register') }}">Registrarse</a>
            </div>
        </div>
    </div>


</div>
</body>
</html>
