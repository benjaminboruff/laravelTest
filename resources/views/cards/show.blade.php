@extends('layout')

@section('content')
    <h1>A card</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3> {{ $card->title }} </h3>
            
            <ul class="list-group">
                @foreach ($card->notes as $note)
                    <li class="list-group-item"><em> {{$note->body}} </em></li>
                @endforeach
            </ul>
            <hr>
            <h4>Add A New Note</h4>
            
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Note</button>
                </div>
            </form>
        </div>
    </div>
@stop