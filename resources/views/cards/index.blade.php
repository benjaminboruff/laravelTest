@extends('layout')

@section('content')
    <h1>All cards</h1>
    
    @foreach ($cards as $card)
        <div><h6> {{ $card->title }} </h6></div>
    @endforeach
@stop