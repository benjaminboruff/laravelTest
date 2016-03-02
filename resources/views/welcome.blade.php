@extends('layout')

@section('title')
<title>Laravel</title>
@stop

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Monsters!</div>
        <div>
            <?php foreach ($monsters as $monster) : ?>
            <li> 
                <h4> <?= $monster;?> </h4> 
            </li>
            <?php endforeach; ?>
        </div>

    </div>
</div>

@stop
