@extends('base')

@section('title','A propos de |' . config('app.name'))

@section('content')
        
        <p>élaboré &hearts; par mes soins!</p>

        <p><a href="{{route('home')}}">Revenir à la page d'accueil></a></p>

@endsection