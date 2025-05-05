@extends('layouts.master')
@section('title')
    Accueil
@endsection

@section('main')
<x-alert type='warning' text='Declined'>
<p>Lorem, ipsum dolor.</p>
</x-alert>
<h3>Home</h3>
<x-user-table :users="$users"/>
@endsection