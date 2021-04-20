@extends('base')

@section('title','A propos de |' . config('app.name'))

@section('content')

        <img src="/images/sato.gif" alt="manga avatar">

        <p>élaboré &hearts; par mes soins!</p>

        <p><a href="{{route('home')}}">Revenir à la page d'accueil></a></p>

@endsection