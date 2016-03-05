@extends('layout')

@section('content')
    <h1>A card</h1>
    
    <div class="content"><h6> {{ $card->title }} </h6>
    <ul>
    @foreach ($card->notes as $note)
        <li><em> {{$note->body}} </em></li>
    @endforeach
    </ul>
    </div>
@stop