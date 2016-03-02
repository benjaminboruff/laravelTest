@extends('layout')

@section('title')
<title>About</title>
@stop

@section('content')

<div class="container">
    <div class="content">
        <div class="title">An About page!</div>
        <p><h5>Cool stuff, eh?</h5></p>
    </div>
</div>

@stop

@section('footer')

<script>
    alert('About page only!');
</script>

@stop
