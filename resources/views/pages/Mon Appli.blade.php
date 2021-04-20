@extends('base')

@section('title')


@section('content')

        <img src="{{asset('/images/FR.png')}}" alt="French flag" class="rounded shadow-2xl h-32 mt-12">
        
        <h1 class="sm:text-5xl text-3xl text-indigo-600 mt-5 font-semibold">Best World Time !<h1>

        <p class="text-lg text-gray-800">Il est actuellement {{date('H:i')}}</p>

@endsection

