@extends('layout')

@section('content')
    <h1>All cards</h1>
    <div>
        <ul>
        @foreach ($cards as $card)
            <li><a href="/cards/{{$card->id}}" <h6> {{ $card->title }} </h6></a></li>
        @endforeach
        </ul>
    </div>
@stop