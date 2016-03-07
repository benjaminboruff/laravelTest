@extends('layout')

@section('title')
<title>edit note</title>
@endsection

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Edit Note</div>
        <form method="POST" action="/notes/{{ $note->id }}">
            {{-- fake a PATCH method --}}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <textarea name="body" class="form-control"> {{ $note->body }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update Note</button>
            </div>
        </form>
    </div>
</div>

@endsection
