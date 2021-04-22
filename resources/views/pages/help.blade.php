@extends('layouts.base', ['title'=>'Help'])

@section('content')

<h1 class="sm:text-5xl text-3xl text-red-600 mt-5 font-semibold">Help</h1>

<p class="text-lg text-gray-800">
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Exercitationem quas incidunt totam magni distinctio iste assumenda, sint, 
in labore, sapiente asperiores quae hic alias similique optio repellendus! Possimus,
obcaecati nesciunt?Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, 
ratione! Cupiditate doloribus, provident vero deserunt eos inventore earum delectus hic
maiores veritatis ducimus corporis illum, 
optio possimus repellendus, dolor nostrum.
</p>

<p><a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-700 underline">Revenir à la page d'accueil</a></p>

@endsection