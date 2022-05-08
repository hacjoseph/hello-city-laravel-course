
@extends('base')
@section('title','About us | '.config('app.name'))

@section('content')
    <img src="{{asset('pictures/logo21.png')}}" alt="about page logo"
    class="m-12 rounded-full shadow-md">
    <h2 class="text-gray-600 mb-5">
        Build with <span class="text-pink-500 ">&hearts;</span> by <strong>Joseph</strong>
    </h2>

    <p><a href="{{route('home')}}" class="text-indigo-500  hover:test-indigo-600 underline">
        Revenir à la page d'acceuil
    </a></p>
@endsection
