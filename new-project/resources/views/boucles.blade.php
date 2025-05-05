@extends('layouts.master')

@section('main')
<div>
    <h1>Hello {{ $nom }}</h1>
    @if(count( $cours) > 0)
    <ul>
        @foreach ($cours as $cour)
         <li>{{ $cour }}</li>
        @endforeach
    </ul>
    @endif
    @isset($nom)
    the name is not nul
    @endisset
    @switch($color)
        @case('red')
            <h1>it's red</h1>
            @break
        @case('black')
            <h1>it's black</h1>
            @break
        @default
            <h1>No color </h1>
    @endswitch
 </div>
@endsection
