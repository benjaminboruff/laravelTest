@extends('layout')

@section('title')
<title>About</title>
@endsection

@section('content')

<div class="container">
    <div class="content">
        <div class="title">An About page!</div>
        <p><h5>Cool stuff, eh?</h5></p>
    </div>
</div>

@endsection

@section('footer')

<script>
    alert('About page only!');
</script>

@endsection
