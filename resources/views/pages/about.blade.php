@extends('layouts/dev_app')

@section('content')
<div class="container">
    <h1 class="text-uppercase">Morgan R. Nelson</h1>
    <p class="lead">Marketer. Project Manager. Entrepreneur.</p>
    <blockquote>
        <p>Happiness not in another place, but this place, not for another hour, but this hour.<p></p>
        <footer><cite title="Walt Whitman">Walt Whitman</cite></footer>
    </blockquote>

    @if(count($people))
        <h3 class="text-uppercase">People I Like</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
</div>
@stop
