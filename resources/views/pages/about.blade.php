@extends('layouts.base', ['title'=>'A propos de'])


@section('content')

        <img src="{{asset('/images/sato.gif')}}" alt="manga avatar" class="my-12 rounded-full shadow-md">

        <h2 class="mb-5 text-gray-800"><span class="text-red-700">&spades;</span>Réalisé par mes soins!<span class="text-blue-700">&spades;</span>
        </h2>

        <p><a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-700 underline">Revenir à la page d'accueil</a></p>

        <p><a href="{{route('auth')}}" class="text-indigo-500 hover:text-indigo-800 underline">Connexion</p>

        <p><a href="{{route('help')}}" class="text-indigo-500 hover:text-indigo-700 underline">Aide</a></p>

@endsection