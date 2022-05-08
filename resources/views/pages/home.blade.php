@extends('base')
@section('title',config('app.name'))

@section('content')
    <img src="{{asset('pictures/flag-togo.png')}}" alt="Togo flag" class="rounded 
    shadow-md h-42 mt-12" >
    <h1 class="text-3xl sm:text-5xl text-indigo-600 font-semibold mt-6" >Hello from Togo</h1>
    <p class="text-gray-800 text-lg ">Il est {{date('h:i A')}}</p>
        
@endsection