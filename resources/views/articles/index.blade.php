@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Articles</h1>
            </div>
        </div>

        @foreach($articles as $article)
            <div class="col-md-12">
                <h2>
                    <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{$article->title}}</a>
                </h2>

                <div class="body">{{ $article->body }}</div>
            </div>
        @endforeach



    </div>



@stop